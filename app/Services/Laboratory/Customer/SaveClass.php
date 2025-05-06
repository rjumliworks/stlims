<?php

namespace App\Services\Laboratory\Customer;

use App\Models\Agency;
use App\Models\Customer;
use App\Models\CustomerName;
use App\Models\CustomerConforme;
use App\Models\AgencyConfiguration;

class SaveClass
{
    public $laboratory, $configuration;

    public function __construct()
    {
        $this->agency = (\Auth::user()->myroles) ? \Auth::user()->myroles[0]->agency_id : null;
        $this->configuration = AgencyConfiguration::with('agency.address')->where('agency_id',$this->agency)->first();
    }

    public function save($request){
        if($request->customer['value'] === $request->customer['name']){
            $name = new CustomerName;
            $name->name = $request->customer['value'];
            $name->has_branches = $request->has_branches;
            if($name->save()){
                $request['name_id'] = $name->id;
            }
        }else{
            $request['name_id'] = $request->customer['value'];
            $name = CustomerName::where('id',$request->customer['value'])->first();
            $name->has_branches = true;
            $name->save();
        }
        $code = $this->generateCode();
        $customer = Customer::create(array_merge($request->all(),['code' => $code,'agency_id' => $this->agency,'user_id' => \Auth::user()->id]));
        $customer->address()->create($request->except(['name','is_main','email','industry_id','classification_id','sex_id','female_id','type_id','contact_no','name_id','is_new','customer','has_branches','option']));
        $customer->contact()->create($request->all());

        return [
            'data' => $customer,
            'message' => 'Customer creation was successful!', 
            'info' => "You've successfully created the new customer."
        ];
    }

    public function update($request){
        $data = Customer::findOrFail($request->id);
        $data->updateIfDirty($request->only('industry_id','classification_id','type_id','sex_id','female_id'));
        $data->contact->updateIfDirty($request->only('email','contact_no'));
        $data->address->updateIfDirty($request->only('province_code','municipality_code','barangay_code','address'));
        return [
            'data' => $data,
            'message' => 'Customer was updated!', 
            'info' => "You've successfully created the new customer."
        ];
    }

    public function conforme($request){
        $data = CustomerConforme::create($request->all());
        $customer = CustomerConforme::findOrFail($data->id);
        $conforme = [
            'value' => $customer->id,
            'name' => $customer->name,
            'contact_no' => $customer->contact_no
        ];

        return [
            'data' => $conforme,
            'message' => 'Conforme was updated!', 
            'info' => "You've successfully updated the conforme."
        ];
    }

    public function updateConforme($request){
        $data = CustomerConforme::findOrFail($request->id);
        $data->name = $request->name;
        $data->contact_no = $request->contact_no;
        $data->save();

        return [
            'data' => $data,
            'message' => 'Conforme was updated!', 
            'info' => "You've successfully updated the conforme."
        ];
    }

    private function generateCode(){
        $agency = Agency::where('id',$this->agency)->first();
        $c = Customer::where('agency_id',$this->agency)->count();
        $code = $agency->code.'-'.'CSTMR-'.str_pad(($c+1), 5, '0', STR_PAD_LEFT);  
        return $code;
    }
}
