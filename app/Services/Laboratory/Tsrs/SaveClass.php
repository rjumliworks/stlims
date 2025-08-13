<?php

namespace App\Services\Laboratory\Tsrs;

use App\Models\Tsr;
use Hashids\Hashids;
use Carbon\Carbon;
use App\Models\AgencyConfiguration;

class SaveClass
{
    public function __construct()
    {
        $this->agency = (\Auth::user()->myroles) ? \Auth::user()->myroles[0]->agency_id : null;
        $this->laboratory = null;
        $this->configuration = AgencyConfiguration::with('agency.address')->where('agency_id',$this->agency)->first();
    }

    public function save($request){
        $data = Tsr::create(array_merge($request->all(),[
            'status_id' => 1,
            'purpose_id' => $request->purpose_id,
            'agency_id' => $this->agency,
            'customer_id' => $request->customer['value'],
            'conforme_id' => $request->conforme['value'],
            'received_by' => \Auth::user()->id,
            'facility_id' => \Auth::user()->profile->facility_id,
            'is_onsite' => ($request->is_onsite) ? $request->is_onsite : 0,
            'created_at'  => ($request->created_at) ? Carbon::parse($request->created_at)->setTime(8, 0, 0) : Carbon::now(),
        ]));
        
        $payment = (in_array($request->discount_id, [5, 6, 7])) ? ['status_id' => 8,'is_free' => 1,'paid_at' => now()] : ['status_id' => 6];
        $data->payment()->create(array_merge($request->all(),$payment));
        ($request->is_referral) ? $data->referral()->create(array_merge($request->all(),['is_psto' => ($request->province_code) ? 1 : 0])) : '';

        $hashids = new Hashids('krad',10);
        $code = $hashids->encode($data->id);

        return [
            'data' => $code,
            'message' => 'TS Request creation was successful!', 
            'info' => "You've successfully created the new request."
        ];
    }

    public function copy($request){
        $old = Tsr::with('payment','referral','services','samples.analyses.addfee')->where('id',$request->id)->first();
        $data = Tsr::create(array_merge($request->all(),[
            'status_id' => 1,
            'purpose_id' => $old->purpose_id,
            'agency_id' => $this->agency,
            'customer_id' =>$old->customer_id,
            'conforme_id' => $old->conforme_id,
            'laboratory_id' => $old->laboratory_id,
            'received_by' => \Auth::user()->id,
            'facility_id' => \Auth::user()->profile->facility_id,
            'is_onsite' => $old->is_onsite,
            'created_at'  => Carbon::now(),
        ]));
        
        $payment = (in_array($old->payment->discount_id, [5, 6, 7])) ? [
            'status_id' => 8,
            'is_free' => 1,
            'paid_at' => now()] : ['status_id' => 6];
        $data->payment()->create(array_merge([
            'discount_id' => $old->payment->discount_id,
            'total' => $old->payment->total,
            'subtotal' => $old->payment->subtotal,
            'discount' => $old->payment->discount
        ],$payment));
        ($old->is_referral) 
        ? 
        $data->referral()->create([
            'is_psto' => $old->referral->is_psto, 
            'province_code' => $old->referral->province_code,
            'agency_id' => $old->referral->agency_id
        ]) 
        : '';

        if(count($old->services) > 0){
            foreach($old->services as $service){
                $data->services()->create([
                    'fee' => $service->fee,
                    'total' => $service->total,
                    'quantity' => $service->quantity,
                    'service_id' => $service->service_id,
                    'is_additional' => $service->is_additional
                ]);
            }
        }

        foreach($old->samples as $sample){
            $s = $data->samples()->create([
                'code' => $sample->code,
                'name' => $sample->name,
                'customer_description' => $sample->customer_description,
                'description' => $sample->description,
            ]);
            foreach($sample->analyses as $analysis){
                $a = $s->analyses()->create([
                    'fee' => $analysis->fee,
                    'status_id' => $analysis->status_id,
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
            'message' => 'TS Request creation was successful!', 
            'info' => "You've successfully created the new request."
        ];
    }
}
