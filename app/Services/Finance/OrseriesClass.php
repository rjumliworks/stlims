<?php

namespace App\Services\Finance;

use App\Models\AgencyConfiguration;
use App\Models\FinanceOrseries;
use App\Http\Resources\DefaultResource;

class OrseriesClass
{
    public function __construct()
    {
        $this->agency = (\Auth::user()->myroles) ? \Auth::user()->myroles[0]->agency_id : null;
        $this->configuration = AgencyConfiguration::where('agency_id',$this->agency)->first();
    }

    public function lists($request){
        $data = FinanceOrseries::when($request->keyword, function ($query, $keyword) {
            $query->where('name', 'LIKE', "%{$keyword}%");
        })
        ->when($this->agency, function ($query, $agency) {
            $query->where('agency_id',$agency);
        })
        ->orderBy('created_at','DESC')
        ->paginate($request->count);
        return DefaultResource::collection($data);
    }

    public function save($request){
        $data = FinanceOrseries::create(array_merge($request->all(),[
            'user_id' => \Auth::user()->id,
            'is_active' => 0,
            'agency_id' => $this->agency
        ]));
           
        return [
            'data' => new DefaultResource($data),
            'message' => 'Orseries creation was successful!', 
            'info' => "You've successfully created a orseries."
        ];
    }

    public function update($request){
        $data = FinanceOrseries::where('id',$request->id)->first();
        $data->update($request->all());

        return [
            'data' => new DefaultResource($data),
            'message' => 'Orseries update was successful!', 
            'info' => "You've successfully updated the selected orseries."
        ];
    }

}
