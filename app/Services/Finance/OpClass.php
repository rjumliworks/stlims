<?php

namespace App\Services\Finance;

use App\Models\UserRole;
use NumberFormatter;
use App\Models\Tsr;
use App\Models\TsrPayment;
use App\Models\Customer;
use App\Models\FinanceOp;
use App\Models\FinanceOpItem;
use App\Models\AgencyConfiguration;
use App\Http\Resources\Finance\OpResource;
use App\Http\Resources\Finance\Tsr\ListResource;

class OpClass
{
    public function __construct()
    {
        $this->agency = (\Auth::user()->myroles) ? \Auth::user()->myroles[0]->agency_id : null;
        $this->configuration = AgencyConfiguration::where('agency_id',$this->agency)->first();
    }

    public function lists($request){
        $data = OpResource::collection(
            FinanceOp::query()
            ->with('items.itemable','or')
            ->with('createdby:id','createdby.profile:id,firstname,lastname,user_id')
            ->with('collection:id,name','payment:id,name,others','status:id,name,color,others')
            ->with('payorable')
            ->when($request->status, function ($query, $status) {
                $query->where('status_id',$status);
            })
            ->when($request->mode, function ($query, $mode) {
                $query->where('payment_id',$mode);
            })
            ->when($this->agency, function ($query, $lab) {
                $query->where('agency_id',$lab);
            })
            ->where('payorable_type','!=','App\Models\FinanceName')
            ->orderBy('updated_at','DESC')
            ->paginate($request->count)
            ->loadMorph('payorable', [
                Customer::class => [
                    'customer_name:id,name,has_branches',
                    'address:address,customer_id,region_code,province_code,municipality_code,barangay_code',
                    'address.region:code,name,region',
                    'address.province:code,name',
                    'address.municipality:code,name',
                    'address.barangay:code,name',
                    'contact:id,email,contact_no,customer_id'
                ],
             ])
        );
        return $data;
    }

    public function save($request){
        $payment_id = $request->payment_id;
        $collection_id = $request->collection_id;

        $payor = Customer::where('id',$request->customer_id)->first();
        $op = $payor->payorable()->create(array_merge($request->all(), [
            'code' => $this->generateCode(),
            'status_id' => 6,
            'created_by' => \Auth::user()->id,
            'agency_id' => \Auth::user()->myroles[0]->agency_id
        ]));
        $id = $op->id;
        if($op){
            $items = $request->selected;
            foreach($items as $item){
                $tsr = Tsr::findOrFail($item['id']);
                $opitem = $tsr->itemable()->create([
                    'amount' => $item['payment']['total'],
                    'op_id' => $id
                ]);
                if($opitem){
                    $payment = TsrPayment::where('tsr_id',$item['id'])->first();
                    $payment->collection_id = $collection_id;
                    $payment->payment_id = $payment_id;
                    $payment->save();
                }
            }
        }
        $op = FinanceOp::findOrFail($op->id);

        return [
            'data' => $op,
            'message' => 'Op creation was successful!', 
            'info' => "You've successfully created the new op."
        ];
    }

    public function update($request){
        $id = $request->id;
        $data = FinanceOp::find($id);
        if($data->status_id == 6){
            $data->payment_id = $request->payment_id;
            $data->collection_id = $request->collection_id;
            $data->save();
            $data = FinanceOp::with('collection:id,name','payment:id,name,others')->where('id',$request->id)->first();
            $message ='Op update was successful!';
            $info =  "You've successfully updated the op.";
            $status = true;
        }else{
            $data = null;
            $message = 'OP was already processed';
            $info =  "Please contact administrator";
            $status = 'error';
        }
        return [
            'data' => $data,
            'message' => $message, 
            'info' => $info,
            'status' => $status,
        ];
    }

    public function delete($request){
        $id = $request->id;
        $data = FinanceOp::find($id);
        if($data->status == 7){
            return [
                'data' => '',
                'message' => 'OP already has an official receipt.', 
                'info' => "An official receipt has already been issued for OP."
            ];
        }else{
            if($data->delete()){
                foreach($request->items as $item){
                    TsrPayment::where('tsr_id',$item['itemable_id'])->update(['payment_id' => null, 'collection_id' => null]);
                }
            }
            return [
                'data' => '',
                'message' => 'OP was removed successful!', 
                'info' => "You've successfully remove the sample."
            ];
        }
    }

    public function customers($request){
        $keyword = $request->keyword;
        $id = $request->id;
        $data = Customer::with('conformes')->with('customer_name')
        ->where(function($query) use ($keyword,$id) {
            $query->where('name', 'LIKE', "%{$keyword}%")
                ->where('id','!=',$id)
                ->orWhereHas('customer_name', function ($query) use ($keyword,$id) {
                    $query->where('name', 'LIKE', "%$keyword%")->whereHas('customer', function ($query) use ($id) {
                        $query->where('id','!=',$id);
                    });
                });
        })
        ->get()->map(function ($item) {
            $name = ($item->customer_name->has_branches) ? ($item->is_main) ? $item->customer_name->name :  $item->customer_name->name.' - '.$item->name : $item->customer_name->name;
            return [
                'value' => $item->id,
                'name' => $name,
                'conformes' => $item->conformes->map(function ($i) {
                    return [
                        'value' => $i->id,
                        'name' => $i->name,
                        'contact_no' => $i->contact_no
                    ];
                })
            ];
        });
        if($keyword){
            return $data;
        }else{
            return [];
        }
    }

    public function tsrs($request){
        $data = ListResource::collection(
            Tsr::query()
            ->with('customer:id,name_id,name,is_main','customer.customer_name:id,name,has_branches')
            ->with('payment:tsr_id,id,total,subtotal,discount,or_number,is_paid,paid_at,status_id','payment.status:id,name,color,others')
            ->whereHas('payment',function ($query){
                $query->where('is_paid', 0)->where('payment_id',null)->where('collection_id',null)->whereIn('status_id',[6,18]);
            })
            ->where('status_id',2)
            ->whereIn('customer_id',$request->customer_id)
            ->orderBy('created_at','DESC')
            ->get()
        );
        return $data;
    }

    public function remove($request){
        $op = FinanceOp::with('items')->where('id',$request->op_id)->first();
        if($op->status_id == 6){
            if(count($op->items) == 1){
                return [
                    'data' => [],
                    'status' => false,
                    'message' => 'Removal Not Allowed',
                    'info' => 'At least one TSR must remain in the Order of Payment. You cannot remove the last item.'
                ];
            }else{
                $data = FinanceOpItem::find($request->id);
                $amount = (float) trim(str_replace(',','',$data->amount),'₱ ');
                // dd($op->total);
                if ($data->delete()) {
                    $op->total = (float) trim(str_replace(',','',$op->total),'₱ ') - $amount;
                    $op->save();
                    
                    $tsrPayment = TsrPayment::where('tsr_id', $request->tsr_id)->first();
                    if ($tsrPayment) {
                        $tsrPayment->payment_id = null;
                        $tsrPayment->collection_id = null;
                        $tsrPayment->save();
                    }
                }

                return [
                    'data' => [],
                    'message' => 'TSR Removed from Order of Payment',
                    'info' => 'The selected TSR has been removed from the Order of Payment, and the total has been adjusted accordingly.'
                ];
            }
        }else{
            return [
                'data' => [],
                'message' => 'Action Not Allowed',
                'status' => false,
                'info' => 'This Order of Payment has already been processed and can no longer be modified.'
            ];
        }
    }

    public function print($request){
        $id = $request->id;
        $items = [];
        $data = FinanceOp::query()
        ->with('items.itemable:id,code,created_at','items.itemable.samples:id,name,tsr_id','items.itemable.samples.analyses:id,sample_id,testservice_id','items.itemable.samples.analyses.testservice:id,testname_id','items.itemable.samples.analyses.testservice.testname:id,name')
        ->with('createdby:id','createdby.profile:id,firstname,lastname,user_id')
        ->with('payorable')
        ->where('id',$id)
        ->first()
        ->loadMorph('payorable', [
            Customer::class => [
                'customer_name:id,name,has_branches',
                'address:address,customer_id,region_code,province_code,municipality_code,barangay_code',
                'address.region:code,name,region',
                'address.province:code,name',
                'address.municipality:code,name',
                'address.barangay:code,name'
            ],
        ]);
        
        if($data){
            $samples_list = [];
            $customer = ($data->payorable->customer_name) ? $data->payorable->customer_name->name : $data->payorable->name; 
            if($data->payorable->customer_name){
                $sub = ($data->payorable->name == 'Main') ? '' : ' - '.$data->payorable->name;
                foreach($data->items as $item){
                    foreach($item->itemable->samples as $samples){
                        foreach($samples['analyses'] as $analysis){
                            $analyses[] = [$analysis['testservice']['testname']['name']];
                        }
                        $samples = [
                            'name' => $samples['name'],
                            'analyses' => $analyses
                        ];
                    }
                    $items[] = [
                        'name' => $item->itemable->code,
                        'date' => $item->itemable->created_at
                    ];
                    $samples_list[] = $samples;
                }
                
            }
        }
        $val = trim($data->total, '₱ ');
        $val = (float) str_replace(',', '', $val);
        $wholeNumber = intval($val);
        $excess = $this->checkDecimal($val);
        $digit = new NumberFormatter("en", NumberFormatter::SPELLOUT);
        $number = $digit->format($wholeNumber);

        $cashier = UserRole::with('user.profile')->where('role_id',6)->where('agency_id',$this->agency)->first();
        $array = [
            'lists' => $data->items,
            'code' => $data->code,
            'date' => $data->created_at,
            'total' => $data->total,
            'word' => ucwords($number).$excess,
            'customer' => $customer.$sub,
            'items' => $items,
            'samples' => $samples_list,
            'address' => $data->payorable->address->address.', '.$data->payorable->address->barangay->name.', '.$data->payorable->address->municipality->name.', '.$data->payorable->address->province->name,
            'cashier' => $cashier->user->profile->firstname.' '.$cashier->user->profile->middlename[0].'. '.$cashier->user->profile->lastname,
            'accountant' => \Auth::user()->profile->firstname.' '.\Auth::user()->profile->middlename[0].'. '.\Auth::user()->profile->lastname
        ];

        $pdf = \PDF::loadView('prints.op',$array)->setPaper('A4', 'portrait');
        return $pdf->stream('orderofpayment.pdf');
    }

    private function checkDecimal($number) {
        $decimal = $number - floor($number);
        $decimal = round($decimal, 2);
    
        if ($decimal == 0.00) {
            return ' And 00/100';
        } else {
            return ' And '.ltrim(substr($decimal, 2), '0').'/100';
        }
    }

    private function generateCode(){
        $year = date('Y'); 
        $c = FinanceOp::where('payorable_type','App\Models\Customer')->whereYear('created_at',$year)->count();
        $temp = ($year == '2024') ? 1000 : 0;
        $code = date('Y').date('m').'-'.str_pad(($temp+$c+1), 4, '0', STR_PAD_LEFT);  
        return $code;
    }
}
