<?php

namespace App\Services\Others\Calendar;

use Carbon\Carbon;
use App\Models\Tsr;
use App\Models\Schedule;
use App\Http\Resources\Operation\Calendar\DueResource;
use App\Http\Resources\Operation\Calendar\EventResource;

class ViewClass
{
    public function __construct()
    {
        $this->agency = (\Auth::user()->myroles) ? \Auth::user()->myroles[0]->agency_id : null;
    }

    public function events($request){
        $data = Schedule::with('user','event')->where('agency_id',$this->agency)->get();
        return EventResource::collection($data);
    }

    public function dues($request){
        $data = Tsr::with('customer:id,name_id,name,is_main','customer.customer_name:id,name,has_branches')
        ->with('laboratory')
        ->with('customer.address:address,customer_id,region_code,province_code,municipality_code,barangay_code','customer.address.region:code,name,region','customer.address.province:code,name','customer.address.municipality:code,name','customer.address.barangay:code,name')
        // ->whereYear('due_at',2025)
        ->whereNotIn('status_id',[4,5])
        ->where('agency_id',$this->agency)->get();
        return DueResource::collection($data);
    }
}
