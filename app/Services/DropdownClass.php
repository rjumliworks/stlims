<?php

namespace App\Services;

use App\Models\UserRole;
use App\Models\Tsr;
use App\Models\TsrSample;
use App\Models\Customer;
use App\Models\Agency;
use App\Models\AgencyConfiguration;
use App\Models\FinanceName;
use App\Models\ListRole;
use App\Models\ListStatus;
use App\Models\ListIndustry;
use App\Models\ListDropdown;
use App\Models\ListDiscount;
use App\Models\ListLaboratory;
use App\Models\LocationRegion;
use App\Models\LocationProvince;
use App\Models\LocationMunicipality;
use App\Models\LocationBarangay;
use App\Models\TestserviceAddon;

class DropdownClass
{  
    public function __construct()
    {
        $this->agency = (\Auth::user()->role != 'Administrator') ? (\Auth::user()->myroles) ? \Auth::user()->myroles[0]->agency_id : null : null;
        $this->ids = (\Auth::check()) ? (\Auth::user()->role == 'Administrator') ? [] : AgencyConfiguration::where('agency_id',$this->agency)->value('laboratories') : '';
        $this->laboratory = UserRole::where('user_id',\Auth::user()->id)->pluck('laboratory_id');
    }

    public function services(){
        $data = TestserviceAddon::where('is_additional',0)->get()->map(function ($item) {
            return [
                'value' => $item->id,
                'label' => $item->name.' ('.$item->description.')',
                'name' => $item->name,
                'description' => $item->description,
                'fee' => $item->fee
            ];
        });
        return $data;
    }

    public function dropdowns($class,$type){
        $data = ListDropdown::where('classification',$class)->where('type',$type)->get()->map(function ($item) {
            return [
                'value' => $item->id,
                'name' => $item->name
            ];
        });
        return $data;
    }

    public function discounts(){
        $data = ListDiscount::with('based','type','subtype')->where('is_active',1)->get()->map(function ($item) {
            $total = ($item->subtype->name == 'Percentage') ? $item->value.'%' : '₱'.$item->value;
            $name = ($item->name === 'Regular') ? $item->name : $item->name.' ('.$total.')';
            return [
                'value' => $item->id,
                'name' => $name,
                'number' => $item->value,
                'type' => $item->type->name,
                'based' => $item->based->name,
                'subtype' => $item->subtype->name,
            ];
        });
        return $data;
    }

    public function statuses($type){
        $data = ListStatus::where('type',$type)->where('is_active',1)->get()->map(function ($item) {
            return [
                'value' => $item->id,
                'name' => $item->name,
                'type' => $item->type,
                'color' => $item->color,
                'others' => $item->others,
            ];
        });
        return $data;
    }

    public function industries(){
        $data = ListIndustry::where('is_active',1)->get()->map(function ($item) {
            return [
                'value' => $item->id,
                'is_main' => $item->is_main,
                'is_alone' => $item->is_alone,
                'industry_id' => $item->industry_id,
                'name' => $item->name
            ];
        });
        return $data;
    }

    public function laboratories(){
        $lab_id = ($this->ids) ? array_column($this->ids, 'value') : null;
        $query = ListLaboratory::query();
        ($lab_id) ? $query->whereIn('id',$lab_id) : '';
        $data = $query->get()->map(function ($item) {
            return [
                'value' => $item->id,
                'name' => $item->name,
                'short' => $item->short
            ];
        });
        return $data;
    }

    public function agencies(){
        $data = Agency::with('member')->where('is_active',1)->get()->map(function ($item) {
            return [
                'value' => $item->id,
                'name' => $item->member->name,
                'short' => $item->name
            ];
        });
        return $data;
    }

    public function roles(){
        $data = ListRole::where('is_active',1)->get()->map(function ($item) {
            return [
                'value' => $item->id,
                'name' => $item->name,
                'has_lab' => $item->has_lab
            ];
        });
        return $data;
    }
    

    public function regions(){
        $data = LocationRegion::all()->map(function ($item) {
            return [
                'value' => $item->code,
                'name' => $item->region
            ];
        });
        return $data;
    }

    public function provinces($code){
        $data = LocationProvince::where('region_code',$code)->get()->map(function ($item) {
            return [
                'value' => $item->code,
                'name' => $item->name
            ];
        });
        return $data;
    }

    public function municipalities($code){
        $data = LocationMunicipality::where('province_code',$code)->get()->map(function ($item) {
            return [
                'value' => $item->code,
                'name' => $item->name
            ];
        });
        return $data;
    }

    public function barangays($code){
        $data = LocationBarangay::where('municipality_code',$code)->get()->map(function ($item) {
            return [
                'value' => $item->code,
                'name' => $item->name
            ];
        });
        return $data;
    }

    public function tsrsamples($keyword){
        $data =  Tsr::when($keyword, function ($query) use ($keyword){
            $query->where('code', 'LIKE', "%{$keyword}%")->whereIn('status_id',[3,4])->whereIn('laboratory_id',$this->laboratory)->where('agency_id',$this->agency);
        })
        ->limit(5)->get()->map(function ($item) {
            return [
                'value' => $item->id,
                'name' => $item->code
            ];
        });
        
        if($keyword){
            return $data;
        }else{
            return [];
        }
    }

    public function tsrs($keyword){
        $data =  Tsr::with('customer:id,name_id,name,is_main','customer.customer_name:id,name,has_branches')
        ->whereDoesntHave('release')
        ->when($keyword, function ($query) use ($keyword){
            $query->where('code', 'LIKE', "%{$keyword}%")->where('status_id',4)->where('agency_id',$this->agency)
            ->whereDoesntHave('release')
            ->orWhereHas('customer',function ($query) use ($keyword) {
                $query->whereHas('customer_name',function ($query) use ($keyword) {
                    $query->where('name', 'LIKE', "%{$keyword}%");
                });
            });
            $query->whereHas('samples', function ($query) {
                $query->whereHas('report'); 
            });
        })
        ->limit(5)->get()->map(function ($item) {
            $name = ($item->customer->name == 'Main') ? '' : ' - '.$item->customer->name;
            return [
                'value' => $item->id,
                'name' => $item->code,
                'customer' =>  $item->customer->customer_name->name.$name,
            ];
        });
        
        if($keyword){
            return $data;
        }else{
            return [];
        }
    }

    public function reports(){
        $data = TsrSample::with('tsr')->whereHas('tsr', function ($query){
                $query->where('agency_id',$this->agency);
            })
            ->whereDoesntHave('report')
            ->whereHas('analyses', function ($query) {
                $query->where('status_id', 12);
            })
            ->get()->map(function ($item) {
            $tsr = $item->tsr_id;
            $related = TsrSample::with('tsr')->whereHas('tsr', function ($query) use ($tsr){
                $query->where('id',$tsr)->where('agency_id',$this->agency);
            })
            ->whereDoesntHave('report')
            ->whereHas('analyses', function ($query) {
                $query->where('status_id', 12);
            })
            ->where('id', '!=', $item->id)
            ->get()->map(function ($item1) {
                return [
                    'value' => $item1->id,
                    'report' => null,
                    'type' => $item1->tsr->laboratory_id,
                    'name' => $item1->code
                ];
            });
            return [
                'value' => $item->id,
                'report' => null,
                'name' => $item->code,
                'type' => $item->tsr->laboratory_id,
                'related' => $related
            ];
        });
        return $data;
    }

    public function payors($request){
        $keyword = $request->keyword;
        if($request->type == 'external'){
            $data = Customer::with('customer_name')
            ->where(function($query) use ($keyword) {
                $query->where('name', 'LIKE', "%{$keyword}%")
                    ->orWhereHas('customer_name', function ($query) use ($keyword) {
                        $query->where('name', 'LIKE', "%$keyword%");
                    });
            })
            ->limit(5)->get()->map(function ($item) {
                $name = ($item->name != 'Main') ? ' - '.$item->name : '' ;
                return [
                    'value' => $item->id,
                    'name' => $item->customer_name->name.$name
                ];
            });
        }else{
            $data = FinanceName::where('name', 'LIKE', "%{$keyword}%")->limit(5)->get()
            ->map(function ($item) {
                return [
                    'value' => $item->id,
                    'name' => $item->name
                ];
            });
        }

        if($keyword){
            return $data;
        }else{
            return [];
        }
    }
}
