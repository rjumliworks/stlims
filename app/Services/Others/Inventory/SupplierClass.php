<?php

namespace App\Services\Others\Inventory;

use App\Models\InventorySupplier;
use App\Http\Resources\Operation\Inventory\SupplierResource;

class SupplierClass
{
    public function __construct()
    {   
        $this->agency = (\Auth::user()->role != 'Administrator') ? (\Auth::user()->myroles) ? \Auth::user()->myroles[0]->agency_id : null : null;
    }

    public function dropdown(){
        $data = InventorySupplier::where('agency_id',$this->agency)->where('is_active',1)->get()->map(function ($item) {
            return [
                'value' => $item->id,
                'name' => $item->name
            ];
        });
        return $data;
    }

    public function save($request){
        $data = InventorySupplier::create(array_merge($request->all(),['agency_id' => $this->agency, 'user_id' => \Auth::user()->id]));
        return [
            'data' => new SupplierResource($data),
            'message' => 'Supplier creation was successful!', 
            'info' => "You've successfully created the new supplier."
        ];
    }
}
