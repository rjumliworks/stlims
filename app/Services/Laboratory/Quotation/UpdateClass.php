<?php

namespace App\Services\Laboratory\Quotation;

use Hashids\Hashids;
use App\Models\Agency;
use App\Models\ListDropdown;
use App\Models\Quotation;
use App\Models\QuotationService;
use App\Models\QuotationSample;
use App\Models\QuotationAnalysis;
use App\Http\Resources\Operation\QuotationResource;

class UpdateClass
{
    public function __construct()
    {
        $this->agency = (\Auth::user()->myroles) ? \Auth::user()->myroles[0]->agency_id : null;
    }

    public function quotation($request){
        $data = Quotation::where('id',$request->id)->first();
        $discount_id = $data->discount_id;
        $data->purpose_id = $request->purpose_id;
        $data->laboratory_id = $request->laboratory_id;
        $data->discount_id = $request->discount_id;
        if($data->save()){
            if($discount_id != $request->discount_id){
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
            }
        }

        $data = new QuotationResource(
            Quotation::with('service.service')
            ->with('createdby:id','createdby.profile:id,firstname,lastname,user_id')
            ->with('laboratory:id,name','agency:id,name','status:id,name,color,others','discounted:id,name,value')
            ->with('customer:id,name_id,name,is_main','customer.customer_name:id,name,has_branches','customer.address:address,customer_id,region_code,province_code,municipality_code,barangay_code','customer.address.region:code,name,region','customer.address.province:code,name','customer.address.municipality:code,name','customer.address.barangay:code,name')
            ->with('customer.contact:id,email,contact_no,customer_id')
            ->with('conforme:id,name,contact_no')
            ->where('id',$request->id)
            ->first()
        );

        return [
            'data' => $data,
            'message' => 'Quotation was successfully updated!', 
            'info' => "You've successfully updated the quotation details.",
        ];
    }

    public function confirm($request){
        $data = Quotation::where('id',$request->id)->first();
        $data->status_id = $request->status_id;
        $data->due_at = $request->due_at;
        $data->code = $this->generateCode($data);
        $data->terms = json_encode($request->terms);
        // json_encode(collect($request->terms)->pluck('name')->all())
        $data->save();
        return [
            'data' => $data,
            'message' => 'Quotation was successfully confirmed!', 
            'info' => "You've successfully updated the quotation status.",
        ];
    }

    public function terms($request){
        $data = Quotation::where('id',$request->id)->first();
        $data->terms = json_encode($request->terms);
        $data->save();
        return [
            'data' => $data,
            'message' => 'Terms was successfully updated!', 
            'info' => "You've successfully updated the terms and conditions.",
        ];
    }

    public function cancel($request){
        $hashids = new Hashids('krad',10);
        $id = $hashids->decode($request->id);

        $data = Quotation::find($id[0]);
        $data->update($request->except(['option']));
        
        $data = new QuotationResource(
            Quotation::with('service.service')
            ->with('createdby:id','createdby.profile:id,firstname,lastname,user_id')
            ->with('laboratory:id,name','agency:id,name','status:id,name,color,others','discounted:id,name,value')
            ->with('customer:id,name_id,name,is_main','customer.customer_name:id,name,has_branches','customer.address:address,customer_id,region_code,province_code,municipality_code,barangay_code','customer.address.region:code,name,region','customer.address.province:code,name','customer.address.municipality:code,name','customer.address.barangay:code,name')
            ->with('customer.contact:id,email,contact_no,customer_id')
            ->with('conforme:id,name,contact_no')
            ->where('id',$id[0])
            ->first()
        );

        return [
            'data' => $data,
            'message' => 'Quotation cancellation was successful!', 
            'info' => "You've successfully cancelled the.",
        ];
    }

    public function removeSample($request){
        $data = QuotationSample::find($request->id);
        $fee = $data->analyses()->sum('fee');
        if($data->delete()){
            $payment = Quotation::with('discounted')->where('id',$request->quotation_id)->first();
            $subtotal = (float) trim(str_replace(',','',$payment->subtotal),'₱ ');
            $total = (float) trim(str_replace(',','',$payment->total),'₱ ');
            if($payment->discount_id === 1){
                $discount = 0;
                $subtotal = $subtotal - $fee;
                $total = $total - $fee;
            }else{
                $subtotal = $subtotal - $fee;
                $discount = (float) (($payment->discounted->value/100) * $subtotal);
                $total =  ((float) $total - (float) $discount);
            }
            $payment->subtotal = $subtotal;
            $payment->discount = $discount;
            $payment->total = $total;
            if($payment->save()){
                return [
                    'data' => [],
                    'message' => 'Sample was removed!', 
                    'info' => "You've successfully remove the sample."
                ];
            }
        }
    }

    public function removeAnalysis($request){
        $data = QuotationAnalysis::find($request->id);
        $fee = (float) trim(str_replace(',','',$data->fee),'₱ ');
        if($data->delete()){
            $quo = QuotationService::where('typeable_id',$request->id)->where('typeable_type','App\Models\QuotationAnalysis')->first();
            $fee2 = ($quo) ? (float) trim(str_replace(',','',$quo->total),'₱ ') : 0;

            $payment = Quotation::with('discounted')->where('id',$request->quotation_id)->first();
            $subtotal = (float) trim(str_replace(',','',$payment->subtotal),'₱ ');
            $total = (float) trim(str_replace(',','',$payment->total),'₱ ');
            if($payment->discount_id === 1){
                $discount = 0;
                $subtotal = $subtotal - ($fee+$fee2);
                $total = $total - ($fee+$fee2);
            }else{
                $subtotal = $subtotal - ($fee+$fee2);
                $discount = (float) (($payment->discounted->value/100) * $subtotal);
                $total =  ((float) $total - (float) $discount);
            }
            $payment->subtotal = $subtotal;
            $payment->discount = $discount;
            $payment->total = $total;
            if($payment->save()){
                return [
                    'data' => [],
                    'message' => 'Analysis was removed!', 
                    'info' => "You've successfully remove the analysis."
                ];
            }
        }
    }

    public function quotationSample($request){
        $data = QuotationSample::findOrFail($request->id)->update($request->all());
        return [
            'data' => $data,
            'message' => 'Quotation update was successful!', 
            'info' => "You've successfully updated a sample."
        ];
    }

    public function additional($request){
        $data = QuotationService::where('id',$request->id)->first();
        $data->quantity = $request->quantity;
        $data->total =  (float) trim(str_replace(',','',$data->fee),'₱ ') * (int) $request->quantity;
        if($data->save()){
            $total = $this->updateTotal($request->q_id, $data->total);
        }
        return [
            'data' => $data,
            'message' => 'Additional fee was successfully updated!', 
            'info' => "You've successfully updated the additional service.",
        ];
    }

    public function deleteAdditional($request){
        $data = QuotationService::find($request->id);
        $fee = (float) trim(str_replace(',','',$data->total),'₱ ');
        if($data->delete()){
            $payment = Quotation::with('discounted')->where('id',$request->quotation_id)->first();
            $subtotal = (float) trim(str_replace(',','',$payment->subtotal),'₱ ');
            $total = (float) trim(str_replace(',','',$payment->total),'₱ ');
            if($payment->discount_id === 1){
                $discount = 0;
                $subtotal = $subtotal - $fee;
                $total = $total - $fee;
            }else{
                $subtotal = $subtotal - $fee;
                $discount = (float) (($payment->discounted->value/100) * $subtotal);
                $total =  ((float) $subtotal - (float) $discount);
            }
            $payment->subtotal = $subtotal;
            $payment->discount = $discount;
            $payment->total = $total;
            $payment->save();
        }

        return [
            'data' => $total,
            'message' => 'Additional Service Removed Successfully',
            'info' => 'The selected additional service has been removed from this TSR.'
        ];
    }

    private function generateCode($data){
        $agency = Agency::where('id',$this->agency)->first();
        $year = date('Y'); 
        $c = Quotation::where('agency_id',$this->agency)
        ->whereYear('created_at',$year)
        ->whereNotNull('code')->count();
        $code = 'QUO-'.$agency->code.'-'.date('Y').'-'.str_pad(($c+1), 4, '0', STR_PAD_LEFT);  
        return $code;
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
}
