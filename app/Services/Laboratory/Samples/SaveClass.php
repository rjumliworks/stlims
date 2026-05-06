<?php

namespace App\Services\Laboratory\Samples;

use App\Models\ListName;
use App\Models\ListSample;
use App\Models\TsrSample;
use App\Models\TsrPayment;
use App\Services\Laboratory\Samples\ReportClass;

class SaveClass
{
    public function __construct(ReportClass $report)
    {
        $this->agency = (\Auth::user()->myroles) ? \Auth::user()->myroles[0]->agency_id : null;
        $this->report = $report;
    }

    public function save($request){
        $count = (int) $request->count;
        for ($i = 0; $i < $count; $i++) {
            TsrSample::create($request->all());
        }
        
        return [
            'data' => true,
            'message' => 'Sample Added Successfully', 
            'info' => "The sample has been added and is now linked to this TSR."
        ];
    }

    public function update($request){
        $data = TsrSample::findOrFail($request->id);
        $data->name = $request->name;
        $data->sampletype_id = (int) $request->sampletype_id;
        $data->customer_description = $request->customer_description;
        $data->description = $request->description;
        $data->remarks = $request->remarks;
        if($data->save()){
            $this->report->update($data->tsr_id);
        }
        return [
            'data' => $data->toArray(),
            'message' => 'Sample Updated Successfully', 
            'info' => "The sample details have been updated and saved to the TSR."
        ];
    }

    public function delete($request){
        $id = $request->id;
        $tsr_id = $request->tsr_id;
        $data = TsrSample::find($id);
        $fee = $data->analyses()->sum('fee');
        if($data->delete()){
            $payment = TsrPayment::with('discounted')->where('tsr_id',$tsr_id)->first();
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
            'data' => $payment,
            'message' => 'Sample Deletion Successful', 
            'info' => "The selected sample has been deleted successfully and is no longer linked to this TSR."
        ];
    }

    public function sampletype($request){
        $data = new ListSample;
        $data->name_id = $request->name_id;
        $data->laboratory_id = $request->laboratory_id;
        $data->agency_id = $this->agency;
        $data->save();

        $data = ListSample::with('name')->where('id',$data->id)->first();
        return [
            'data' => [
                'value' => $data->name->id,
                'name' => $data->name->name,
            ],
            'message' => 'Name added Successfully', 
            'info' => "The name saved to the TSR."
        ];
    }

    public function name($request){
        if($request->name_id){
            $data = new ListName;
            $data->name = $request->name;
            $data->parent_id = $request->name_id;
            $data->is_sub = true;
            $data->save();
        }else{
            $data = new ListName;
            $data->name = $request->name;
            $data->save();
        }

        return [
            'data' => ListName::with('subs')->where('id',$data->id)->first(),
            'message' => 'Name added Successfully', 
            'info' => "The name saved to the TSR."
        ];
    }
}
