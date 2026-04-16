<?php

namespace App\Services\Laboratory\Quotation;

use Hashids\Hashids;
use App\Models\Tsr;
use App\Models\Quotation;
use App\Models\QuotationSample;
use App\Models\QuotationService;
use App\Models\QuotationAnalysis;
use App\Models\QuotationReferral;
use Carbon\Carbon;

class SaveClass
{
    public function __construct()
    {
        $this->agency = (\Auth::user()->myroles) ? \Auth::user()->myroles[0]->agency_id : null;
    }

    public function tsr($request){
        $id = $request->id;
        $data = Tsr::create([
            'customer_id' => $request->customer_id,
            'conforme_id' => ($request->conforme) ? $request->conforme['value'] : $request->conforme_id,
            'purpose_id' => $request->purpose_id,
            'agency_id' => $this->agency,
            'laboratory_id' => $request->laboratory_id,
            'is_referral' => $request->is_referral,
            'facility_id' => \Auth::user()->profile->facility_id,
            'status_id' => 1,
            'received_by' => \Auth::user()->id
        ]);
        if($request->is_referral){
            $referral = QuotationReferral::where('quotation_id',$id)->first();
            $data->referral()->create([
                'is_psto' => ($referral->province_code) ? 1 : 0,
                'province_code' => ($referral->province_code) ? $referral->province_code : null,
                'agency_id' => $referral->agency_id
            ]);
        }
        if($data){
            $data->payment()->create([
                'total' => $request->total,
                'subtotal' => $request->subtotal,
                'discount' => $request->discount,
                'discount_id' => $request->discount_id,
                'status_id' => 6,
                'is_free' =>  (in_array($request->discount_id, [5, 6, 7, 10, 11, 12])) ? 1 : 0,
                'paid_at' =>  (in_array($request->discount_id, [5, 6, 7, 10, 11, 12])) ? now() : NULL,
            ]);
            $samples = QuotationSample::with('analyses.addfee.service')->where('quotation_id',$id)->get();
            foreach($samples as $sample){
                $s = $data->samples()->create([
                    'name' => $sample['name'],
                    'customer_description' => $sample['customer_description'],
                    'description' => $sample['description'],
                    'sampletype_id' => $sample['sampletype_id'],
                    'tsr_id' => $data->id
                ]);
                foreach($sample['analyses'] as $analysis){
                    // dd($analysis['id']);
                    $a = $s->analyses()->create([
                        'fee' => $analysis['fee'],
                        'testservice_id' => $analysis['testservice_id'],
                        'sample_id' =>$s->id,
                        'status_id' => 10
                    ]);

                    $services = QuotationService::where('typeable_id',$analysis['id'])->where('typeable_type','App\Models\QuotationAnalysis')->get();
                    foreach($services as $service){
                        $a->addfee()->create([
                            'fee' => $service['fee'],
                            'total' => $service['total'],
                            'quantity' => $service['quantity'],
                            'service_id' => $service['service_id'],
                            'is_additional' => $service['is_additional'],
                        ]);
                    }
                }
            }
            $services = QuotationService::where('typeable_id',$id)->where('typeable_type','App\Models\Quotation')->get();
            foreach($services as $service){
                $data->services()->create([
                    'fee' => $service['fee'],
                    'total' => $service['total'],
                    'quantity' => $service['quantity'],
                    'service_id' => $service['service_id'],
                    'is_additional' => $service['is_additional'],
                ]);
            }
            $status = Quotation::where('id',$id)->update(['status_id' => 16]);
        }

        $hashids = new Hashids('krad',10);
        $code = $hashids->encode($data->id);

        return [
            'data' => $code,
            'message' => 'TS Request creation was successful!', 
            'info' => "You've successfully created the new request."
        ];
    }

    public function quotation($request){
        $data = Quotation::create(array_merge($request->all(),[
            'status_id' => 14,
            'agency_id' => $this->agency,
            'facility_id' => \Auth::user()->profile->facility_id,
            'customer_id' => $request->customer['value'],
            'conforme_id' => $request->conforme['value'],
            'created_by' => \Auth::user()->id
        ]));
        ($request->is_referral) ? $data->referral()->create(array_merge($request->all(),['is_psto' => ($request->province_code) ? 1 : 0])) : '';
        $hashids = new Hashids('krad',10);
        $code = $hashids->encode($data->id);
        return [
            'data' => $code,
            'message' => 'Quotation creation was successful!', 
            'info' => "You've successfully created the new quotation."
        ];
    }

    public function service($request){
        $data = Quotation::findOrFail($request->id);
        $data->service()->create([
            'service_id' => $request->service['value'],
            'fee' => $request->service['fee'],
            'quantity' => $request->quantity,
            'total' => $request->total,
        ]);
        $total = $this->updateTotal($request->id,$request->total);
        return [
            'data' => $total,
            'message' => 'Service added was successful!', 
            'info' => "You've successfully added a service."
        ];
    }

    public function fee($request){
        $data = QuotationAnalysis::findOrFail($request->id);
        $grandTotal = 0;
        foreach($request->services as $service){
            $fee = str_replace(['₱', ','], '', $service['fee']);
            $quantity = $service['quantity'];
            $total = $fee * $quantity;
            $data->addfee()->create([
                'service_id' => $service['id'],
                'fee' => $fee,
                'total' => $total,
                'quantity' => $quantity,
                'is_additional' => 1
            ]);
            $grandTotal += $total;
        }
        $total = $this->updateTotal($request->tsr_id,$request->total);
       return [
            'data' => $total,
            'message' => 'Additional Fee Added Successfully', 
            'info' => "Additional fee has been added and linked to this TSR as an add-on."
        ];
    }

    public function sample($request){
        $count = (int) $request->count;
        for ($i = 0; $i < $count; $i++) {
            QuotationSample::create($request->all());
        }
        return [
            'data' => true,
            'message' => 'Sample added was successful!', 
            'info' => "You've successfully created the new sample."
        ];
    }

    public function analyses($request){
        foreach($request->samples as $sample){
            foreach($request->lists as $list){
                $data = QuotationAnalysis::create(array_merge($request->all(),[
                    'status_id' => 10,
                    'testservice_id' => $list['id'],
                    'fee' => $list['fee'],
                    'sample_id' => $sample
                ]));
                $total =  $this->updateTotal($data->sample->quotation_id,$list['fee']);
            }
        }
        return [
            'data' => $total,
            'message' => 'Analysis added was successful!', 
            'info' => "You've successfully created the new analysis."
        ];
    }

    private function updateTotal($id,$fee){
        $data = Quotation::with('discounted')->where('id',$id)->first();
        $fee = (float) trim(str_replace(',','',$fee),'₱ ');
        $subtotal = (float) trim(str_replace(',','',$data->subtotal),'₱ ');
        if($data->discount_id === 1){
            $discount = 0;
            $subtotal = $subtotal + $fee;
            $total = $subtotal;
        }else{
            $subtotal = $subtotal + $fee;
            $discount = (float) (($data->discounted->value/100) * $subtotal);
            $total =  ((float) $subtotal - (float) $discount);
        }
        $data->subtotal = $subtotal;
        $data->discount = $discount;
        $data->total = $total;
        $data->save();
        return $data->total;
    }

    public function copy($request){
        $old = Quotation::with('samples.analyses.addfee','referral','service')->where('id',$request->id)->first();
        $data = Quotation::create(array_merge($request->all(),[
            'total'    => (float) str_replace([',', '₱'], '', $old->total),
            'subtotal' => (float) str_replace([',', '₱'], '', $old->subtotal),
            'discount' => (float) str_replace([',', '₱'], '', $old->discount),
            'terms' => $old->terms,
            'status_id' => 14,
            'purpose_id' => $old->purpose_id,
            'discount_id' => $old->discount_id,
            'agency_id' => $this->agency,
            'customer_id' =>$old->customer_id,
            'conforme_id' => $old->conforme_id,
            'laboratory_id' => $old->laboratory_id,
            'created_by' => \Auth::user()->id,
            'facility_id' => \Auth::user()->profile->facility_id,
            'is_referral' => $old->is_referral,
            'created_at'  => Carbon::now(),
        ]));
        
        if($old->is_referral){  
            $data->referral()->create([
                'is_psto' => $old->referral->is_psto, 
                'province_code' => $old->referral->province_code,
                'agency_id' => $old->referral->agency_id
            ]);
        }

        if($old->service){

            $data->service()->create([
                'fee' => (float) str_replace([',', '₱'], '', $old->service->fee),
                'total' => (float) str_replace([',', '₱'], '', $old->service->total),
                'quantity' => $old->service->quantity,
                'service_id' => $old->service->service_id,
                'is_additional' => $old->service->is_additional
            ]);
            
        }

        foreach($old->samples as $sample){
            $s = $data->samples()->create([
                'name' => $sample->name,
                'sampletype_id' => $sample->sampletype_id,
                'customer_description' => $sample->customer_description,
                'description' => $sample->description,
            ]);
            foreach($sample->analyses as $analysis){
                $a = $s->analyses()->create([
                    'fee' => $analysis->fee,
                    'testservice_id' => $analysis->testservice_id
                ]);
                if($analysis->addfee){
                    $a->addfee()->create([
                        'fee' => $analysis->addfee->fee,
                        'total' => $analysis->addfee->total,
                        'quantity' => $analysis->addfee->quantity,
                        'service_id' => $analysis->addfee->service_id,
                        'is_additional' => $analysis->addfee->is_additional
                    ]);
                }
            }
        }

        $hashids = new Hashids('krad',10);
        $code = $hashids->encode($data->id);

        return [
            'data' => $code,
            'message' => 'Quotation copied!', 
            'info' => "You've successfully copied the quotation."
        ];
    }
}
