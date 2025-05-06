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
}
