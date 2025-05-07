<?php

namespace App\Services\Executive\Agency;

use App\Models\Agency;
use App\Models\AgencyConfiguration;
use App\Http\Resources\Executive\AgencyResource;

class SaveClass
{
    public function activate($request){
        $data = Agency::with('configuration')->where('id',$request->id)->first();
        $data->is_active = 1;
        if($data->save()){
            $form = [
                "time" => "update time",
                "email" => "update email",
                "address" => "update address",
                "contact" => "update contact",
                "form_name" => "update form name"
            ];
            
            $config = new AgencyConfiguration;
            $config->laboratories = [];
            $config->form = $form;
            $config->contact = [];
            $config->samplecode_year = 0;
            $config->agency_id = $data->id;
            $config->save();
        }
        $data = new AgencyResource(
            Agency::with('member','type','configuration')->where('id',$request->id)->first()
        );
        return [
            'data' => $data,
            'message' => 'Agency activation was successful!',
            'info' => "The agency is now active and has full access to the laboratory system, including test services and other features."
        ];
    }

    public function laboratories($request){
        $data = AgencyConfiguration::where('id',$request->id)->first();
        $data->laboratories = $request->laboratories;
        $data->save();

        return [
            'data' => $data,
            'message' => 'User creation was successful!', 
            'info' => "You've successfully created an account for the user."
        ];
    }

    public function settings($request){
        $data = AgencyConfiguration::where('id',$request->id)->first();
        $data->form = $request->settings;
        $data->save();

        return [
            'data' => $data,
            'message' => 'User creation was successful!', 
            'info' => "You've successfully created an account for the user."
        ];
    }

    public function fee($request){
        $data = Agency::findOrFail($request->id);
        $data->fees()->create($request->all());
        return [
            'data' => $data,
            'message' => 'Additional fee added was successful!', 
            'info' => "You've successfully added additional fee."
        ];
    }
}
