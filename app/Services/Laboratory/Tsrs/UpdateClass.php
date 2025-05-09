<?php

namespace App\Services\Laboratory\Tsrs;

use App\Models\UserRole;
use App\Models\Tsr;
use App\Models\TsrSample;
use App\Models\TsrReport;
use App\Models\TsrPayment;
use App\Models\Agency;
use App\Models\AgencyConfiguration;
use App\Models\ListLaboratory;
use Hashids\Hashids;
use App\Http\Resources\Operation\TsrResource;

class UpdateClass
{
    public function __construct()
    {
        $this->agency = (\Auth::user()->myroles) ? \Auth::user()->myroles[0]->agency_id : null;
        $this->laboratory = UserRole::where('user_id',\Auth::user()->id)->pluck('laboratory_id');
        $this->configuration = AgencyConfiguration::with('agency.address')->where('agency_id',$this->agency)->first();
    }

    public function update($request){
        $data = Tsr::with('payment')->where('id',$request->id)->first();
        if($data->status_id == 1 || $data->status_id == 2){
            $data->customer_id = $request->customer['value'];
            $data->conforme_id = $request->conforme['value'];
            $data->purpose_id = $request->purpose_id;
            $data->laboratory_id = $request->laboratory_id;
            $data->save();
            if($data){
                if($data->payment->discount_id != $request->discount_id){
                    if(in_array($request->discount_id, [5, 6, 7])){
                        $data->payment->update([
                            'discount_id' => $request->discount_id,
                            'status_id' => 8,
                            'paid_at' => now(),
                            'is_free' => 1
                        ]);
                        $data->status_id = 3; //update to ongoing since it is gratis
                        $data->save();
                    }else{
                        $data->payment->update([
                            'discount_id' => $request->discount_id
                        ]);
                    }
                    $total = $this->updateTotal($request->id,$data->payment->subtotal);
                }
                $this->report($request->id);
            }

            $final =  Tsr::query()
            ->with('laboratory','status','received.profile')
            ->with('customer.customer_name','conforme','customer.address.region','customer.address.province','customer.address.municipality','customer.address.barangay')
            ->with('payment.status','payment.collection','payment.type','payment.discounted')
            ->where('id',$request->id)
            ->first();

            return [
                'data' => new TsrResource($final),
                'message' => 'TSR was successfully updated!', 
                'info' => "You've successfully updated the tsr details.",
            ];
        }else{
            return [
                'data' => [],
                'message' => 'Action Not Allowed',
                'status' => false,
                'info' => 'This TSR has already been processed and can no longer be modified.'
            ];
        }

    }

    public function cancel($request){
        $hashids = new Hashids('krad',10);
        $id = $hashids->decode($request->id);

        $data = Tsr::find($id[0]);
        $data->update($request->except(['option']));
        $payment = TsrPayment::where('tsr_id',$id[0])->update(['status_id' => 9]);
    
        $data = new TsrResource(
            Tsr::with('service.service')
            ->with('customer:id,name_id,name,is_main','customer.customer_name:id,name,has_branches','customer.wallet')
            ->with('customer.address:address,customer_id,region_code,province_code,municipality_code,barangay_code','customer.address.region:code,name,region','customer.address.province:code,name','customer.address.municipality:code,name','customer.address.barangay:code,name')
            ->with('payment:tsr_id,id,total,subtotal,discount,or_number,is_paid,is_free,paid_at,status_id,discount_id,collection_id,payment_id','payment.status:id,name,color,others')
            ->where('id',$id[0])
            ->first()
        );

        return [
            'data' => $data,
            'message' => 'TS Request Cancelled', 
            'info' => "Request has been cancelled. No further actions can be performed, including adding samples, analyses, or editing any information.",
        ];
    }

    public function confirm($request){
        $data = Tsr::with('payment')->where('id',$request->id)->first();
        if(is_null($data->code)){
            $data->status_id = (in_array($data->payment->discount_id, [5, 6, 7])) ? 3 : $request->status_id;
            $data->due_at = $request->due_at;
            $data->code = $this->generateCode($data);
            if($data->save()){
                $samples = TsrSample::where('tsr_id',$request->id)->get();
                foreach($samples as $sample){
                    $s = TsrSample::findOrFail($sample->id);
                    $s->code = $this->generateSampleCode($data);
                    $s->save();
                }
                $this->report($request->id);
                
                if($request->is_government){
                    $data->status_id = 3;
                    $data->save();
                    $data->payment()->update(['status_id' => 18]);
                }
            }
        }

        $final =  Tsr::query()
        ->with('laboratory','status','received.profile')
        ->with('customer.customer_name','conforme','customer.address.region','customer.address.province','customer.address.municipality','customer.address.barangay')
        ->with('payment.status','payment.collection','payment.type','payment.discounted')
        ->where('id',$request->id)
        ->first();
        return [
            'data' => new TsrResource($final),
            'message' => 'TSR was successfully confirmed!', 
            'info' => "You've successfully updated the tsr status.",
        ];
    }

    private function generateCode($data){
        $labs = $this->configuration->laboratories;
        $specificValue = $data->laboratory_id;
        $lab = array_values(array_filter($labs, function ($object) use ($specificValue) {
            return $object['value'] === $specificValue;
        }));
        $tsr_count = $lab[0]['tsr_count'];
        $laboratory = $data->laboratory_id;
        $agency = Agency::where('id',$this->agency)->first();
        $year = date('Y'); 
        $lab_type = ListLaboratory::select('short')->where('id',$laboratory)->first();
        $c = Tsr::where('agency_id',$this->agency)->where('laboratory_id',$laboratory)
        ->whereYear('created_at',$year)->where('code','!=',NULL)->count();
        $code = $agency->code.'-'.date('m').date('Y').'-'.$lab_type->short.'-'.str_pad(($tsr_count+$c+1), 4, '0', STR_PAD_LEFT);  //$tsr_count+ remove since it will reset
        return $code;
    }

    private function generateSampleCode($data){
        $labs = $this->configuration->laboratories;
        $specificValue = $data->laboratory_id;
        $lab = array_values(array_filter($labs, function ($object) use ($specificValue) {
            return $object['value'] === $specificValue;
        }));
        $sample_count = $lab[0]['sample_count'];

        $laboratory = $data->laboratory_id;
        $year = ($this->configuration->samplecode_year) ? '-'.date('Y') : '';
        $lab = Agency::where('id',$this->agency)->first();
        $year = date('Y'); 
        $lab_type = ListLaboratory::select('short')->where('id',$laboratory)->first();
        $c = TsrSample::whereHas('tsr',function ($query) use ($laboratory) {
            $query->where('agency_id',$this->agency)->where('laboratory_id',$laboratory);
        })->whereYear('created_at',$year)->where('code','!=','NULL')->count();
        return $lab_type->short.'-'.str_pad(($sample_count+$c+1), 5, '0', STR_PAD_LEFT); //$sample_count+ removed
    }

    private function updateTotal($id,$fee){
        $data = TsrPayment::with('discounted')->where('tsr_id',$id)->first();
        // $fee = (float) trim(str_replace(',','',$fee),'₱ ');
        $subtotal = (float) trim(str_replace(',','',$data->subtotal),'₱ ');
        if($data->discount_id === 1){
            $discount = 0;
            $subtotal = $subtotal; //+ $fee;
            $total = $subtotal;
        }else{
            $subtotal = $subtotal; //+ $fee;
            $discount = (float) (($data->discounted->value/100) * $subtotal);
            $total =  ((float) $subtotal - (float) $discount);
        }
        $data->subtotal = $subtotal;
        $data->discount = $discount;
        $data->total = $total;
        $data->save();
        return $data;
    }

    public function report($id){
        $tsr = Tsr::where('id',$id)
        ->with('services.service')
        ->with('received:id','received.profile:id,firstname,middlename,lastname,user_id')
        ->with('agency','laboratory:id,name','status:id,name,color,others')
        ->with('customer:id,name_id,name,is_main','customer.customer_name:id,name,has_branches','customer.wallet')
        ->with('customer.address:address,customer_id,region_code,province_code,municipality_code,barangay_code','customer.address.region:code,name,region','customer.address.province:code,name','customer.address.municipality:code,name','customer.address.barangay:code,name')
        ->with('conforme:id,name,contact_no','customer.contact:id,email,contact_no,customer_id')
        ->with('payment:tsr_id,id,total,subtotal,discount,or_number,is_paid,is_free,paid_at,status_id,discount_id,collection_id,payment_id','payment.status:id,name,color,others','payment.collection:id,name','payment.type:id,name','payment.discounted:id,name,value')
        ->first();

        $samples = TsrSample::with('analyses.testservice.method.method','analyses.testservice.testname','analyses.addfee.service')->whereHas('tsr',function ($query) use ($id) {
            $query->where('id',$id);
        })->get();

        $groupedData = [];
        foreach ($samples as $row) {
            $sampleCode = $row['code'];
            $sampleName = $row['name'];
            
            foreach($row['analyses'] as $index=>$analysis){
                $testName = $analysis['testservice']['testname']['name'];
                $testMethod = $analysis['testservice']['method']['method']['name'];
                $testMethodShort = $analysis['testservice']['method']['method']['short'];
                $key = $sampleCode . "_" . $testName . "_" . $testMethod;
                
                if (!isset($groupedData[$key])) {
                    if($analysis['addfee']){
                        $fee = [
                            'name' => $analysis['addfee']['service']['name'],
                            'fee' => $analysis['addfee']['service']['fee'],
                            'quantity' => $analysis['addfee']['quantity'],
                            'total' => $analysis['addfee']['total']
                        ];
                    }else{
                        $fee = null;
                    }
                    $groupedData[$key] = [
                        "samplecode" => ($index == 0) ? $sampleCode : '',
                        "samplename" => ($index == 0) ? $sampleName : '-',
                        "testname" => $testName,
                        "method" => $testMethod,
                        "methodShort" => $testMethodShort,
                        "count" => 0,
                        "fee" => $analysis['fee'],
                        'additional' => $fee
                    ];
                }
                $groupedData[$key]["count"] += 1;
            }
        }
        if(isset($tsr->service)){
            $service = [
                'name' => $tsr->service->service->name,
                'description' => $tsr->service->service->description,
                'quantity' => $tsr->service->quantity,
                'fee' => $tsr->service->fee
            ];
        }else{
            $service = null;
        }

        $samples = array_values($groupedData);

        $descs = TsrSample::query()
        ->where('tsr_id',$id)
        ->get();
        $d = ($tsr->customer->address->address != NULL || $tsr->customer->address->address != '') ? $tsr->customer->address->address.', ' : '';
        if($tsr->customer->address->municipality->name == 'Zamboanga City' || $tsr->customer->address->municipality->name == 'Isabela City'){
            $a = $tsr->customer->address->municipality->name;
        }else if($tsr->customer->address->province->name == 'Sulu'){
            $a = ', '.$tsr->customer->address->province->name;
        }else{
            $a = $tsr->customer->address->municipality->name.', '.$tsr->customer->address->province->name;
        }
        $information = [
            'code' => $tsr->code,
            'service' => $service,
            'date' => $tsr->created_at,
            'laboratory_id' => $tsr->laboratory_id,
            'due_at' => $tsr->due_at,
            'receiver' => $tsr->received->profile->firstname.' '.$tsr->received->profile->middlename[0].'. '.$tsr->received->profile->lastname,
            'customer' => [
                'name' => ($tsr->customer->is_main) ? $tsr->customer->customer_name->name :  $tsr->customer->customer_name->name.' - '.$tsr->customer->name,
                'address' => $d.$tsr->customer->address->barangay->name.', '.$a,
                'contact_no' => $tsr->customer->contact->contact_no,
                'email' => $tsr->customer->contact->email,
                'conforme' => [
                    'name' => $tsr->conforme->name,
                    'contact_no' => $tsr->conforme->contact_no
                ]
            ],
            'payment' => [
                'subtotal' => $tsr->payment->subtotal,
                'discount' => $tsr->payment->discount,
                'total' => $tsr->payment->total,
            ],
            'samples' => $samples,
            'descriptions' => $descs    
        ];
        if(TsrReport::where('tsr_id',$id)->count() > 0){
            $data = TsrReport::where('tsr_id',$id)->first();
            $data->information = json_encode($information);
            $data->save();
        }else{
            $data = TsrReport::create([
                'information' => json_encode($information,true),
                'tsr_id' => $id
            ]);
        }
        return true;
    }

}
