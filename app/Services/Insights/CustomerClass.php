<?php

namespace App\Services\Insights;

use Carbon\Carbon;
use App\Models\Tsr;
use App\Models\TsrPayment;
use App\Models\Customer;
use App\Models\Address;
use App\Models\ListIndustry;
use App\Models\ListDropdown;
use App\Models\ListDiscount;
use App\Models\LocationProvince;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\LocationExport;
use App\Http\Resources\DefaultResource;

class CustomerClass
{
    public function __construct(){   
        $this->agency = (count(\Auth::user()->myroles) > 0) ? \Auth::user()->myroles[0]->agency_id : null;
    }

    public function excel($request){
        // $code = '097200000';//zdn
        // $code = '097300000';//zds
        $code = '098300000'; //zsp 
        return Excel::download(new LocationExport($code), $code.'.xlsx');
    }

    public function info($request){
        $sort = ($request->sort) ? $request->sort : 'desc';
        $year = $request->year;
        $month = $request->month;
        $laboratory = $request->laboratory;

        return [
            [
                'name' => 'New Customers',
                'description' => 'Customers who recently availed services',
                'total' => Customer::where('is_new',1)
                ->when($month, function ($query, $month) {
                    $query->whereMonth('created_at',$month);
                })
                ->when($year, function ($query, $year) {
                    $query->whereYear('created_at',$year);
                })
                ->where('agency_id', $this->agency)->where('is_active',1)->count(),
                'icon' => 'ri-user-add-fill fs-20',
                'color' => 'text-info'
            ],
            [
                'name' => 'Active Customers',
                'description' => 'Customers actively using services',
                'total' => Customer::whereHas('tsrs', function ($query) use ($year, $month) {
                    ($year) ? $query->whereYear('created_at', $year) : '';
                    ($month) ? $query->whereMonth('created_at', $month) : '';
                })
                ->where('agency_id', $this->agency)
                ->count(),
                'icon' => 'ri-group-2-fill fs-20',
                'color' => 'text-success'
            ],
            [
                'name' => 'Old Customer',
                'description' => 'Existing customers who returned for services',
                'total' =>  Customer::whereYear('created_at', '<', $year) 
                ->whereHas('tsrs', function ($query) use ($year){
                    ($year) ? $query->whereYear('created_at', $year) : '';
                })
                ->where('agency_id', $this->agency)
                ->count(),
                'icon' => 'ri-checkbox-circle-fill fs-20',
                'color' => 'text-success',
                'icon' => 'ri-radio-button-fill fs-20',
                'color' => 'text-primary'
            ]
        ];
    }

    public function info2($request){
        $sort = ($request->sort) ? $request->sort : 'desc';
        $year = $request->year;
        $month = $request->month;
        $laboratory = $request->laboratory;


        return [
            [
                'name' => 'Firms',
                'description' => 'Business entities availing services.',
                'total' => Customer::where('classification_id',8)
                ->when($month, function ($query, $month) {
                    $query->whereMonth('created_at',$month);
                })
                ->when($year, function ($query, $year) {
                    $query->whereYear('created_at',$year);
                })
                ->where('agency_id', $this->agency)->where('is_active',1)->count(),
                'icon' => 'ri-team-fill fs-20',
                'color' => 'text-dark'
            ],
            [
                'name' => 'Individuals',
                'description' => 'Private customers using services',
                'total' => Customer::where('classification_id',9)
                ->when($month, function ($query, $month) {
                    $query->whereMonth('created_at',$month);
                })
                ->when($year, function ($query, $year) {
                    $query->whereYear('created_at',$year);
                })
                ->where('agency_id', $this->agency)->where('is_active',1)->count(),
                'icon' => 'ri-user-3-fill fs-20',
                'color' => 'text-dark'
            ]
        ];
    }

    public function chart($request){
        $year = ($request->year) ? $request->year : date('Y') ;
        $laboratory = $request->laboratory;
        $months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];

        $first = []; 
        for($month = 1; $month <= 12; $month++){
            $count = Customer::where('is_new',1)
            ->whereMonth('created_at',$month)->whereYear('created_at',$year)
            ->where('agency_id', $this->agency)->where('is_active',1)->count();
            $first[] = $count;
        }
        $second = [];
        for($month = 1; $month <= 12; $month++){
            $count = Customer::whereHas('tsrs', function ($query) use ($year,$month) {
                $query->whereYear('created_at', $year)->whereMonth('created_at', $month);
            })
            ->where('agency_id', $this->agency)->count();
            $second[] = $count;
        }
        $third = [];
        for($month = 1; $month <= 12; $month++){
            $count = Customer::whereYear('created_at', '<', $year) 
            ->whereHas('tsrs', function ($query) use ($year,$month){
                $query->whereYear('created_at', $year)->whereMonth('created_at', $month);
            })
            ->where('agency_id', $this->agency)->count();
            $third[] = $count;
        }

        $arr = [
            [
                'name' => 'New Customer',
                'data' => $first
            ],
            [
                'name' => 'Active Customer', 
                'data' => $second
            ],
            [
                'name' => 'Old Customer', 
                'data' => $third
            ]
        ];
        
        return $y =[
            'categories' => $months,
            'lists' => $arr,
        ];
    }

    public function location($request){
        $laboratory = $request->laboratory; 
        $provinces = Customer::with('address')
        ->when($laboratory, function ($query, $laboratory) {
            $query->whereHas('tsrs', function ($q) use ($laboratory) {
                $q->where('laboratory_id', $laboratory); // Filter by laboratory_type
            });
        })
        ->where('agency_id', $this->agency)
        ->get()
        ->pluck('address.province_code') 
        ->unique();

        $data = LocationProvince::withCount(['address' => function ($query){
            $query->where('addressable_type','App\Models\Customer');
        }])
        ->whereIn('code',$provinces)->orderBy('address_count','DESC')->get();

        return DefaultResource::collection($data);
    }

    public function industries($request){
        $type = $request->laboratory; 
        $sort = ($request->sort) ? $request->sort : 'desc';
        $year = $request->year;
        $month = $request->month;
        $laboratory = $request->laboratory;
        
        $query = ListIndustry::query();
        $query->withCount(['customer_industry' => function ($query) use ($laboratory,$month,$year) {
            $query->where('agency_id', $this->agency);
            if ($laboratory) {
                $query->whereHas('tsrs', function ($q) use ($laboratory,$month,$year) {
                    $q->where('laboratory_id', $laboratory);
                    ($month) ? $q->whereMonth('created_at',$month) : '';
                    ($year) ? $q->whereYear('created_at',$year) : '';
                });
            }
        }])
        ->having('customer_industry_count', '>', 0)
        ->orderBy('customer_industry_count', $sort);
        $data = ($request->type == 'industry') ? $query->paginate(10) : $query->get();
        return DefaultResource::collection($data);
    }

    public function purposes($request){
        $sort = ($request->sort) ? $request->sort : 'desc';
        $year = $request->year;
        $month = $request->month;
        $laboratory = $request->laboratory;
        
        $query = ListDropdown::query()->where('classification','Purpose');
        $query->withCount(['customer_purpose' => function ($query) use ($laboratory,$month,$year) {
            $query->where('agency_id', $this->agency)->whereIn('status_id',[2,3,4]);
            ($laboratory) ? $query->where('laboratory_id',$laboratory) : '';
            ($month) ? $query->whereMonth('created_at',$month) : '';
            ($year) ? $query->whereYear('created_at',$year) : '';
        }])
        ->orderBy('customer_purpose_count', $sort);
        $data = ($request->type == 'purpose') ? $query->paginate(10) : $query->get();
        return DefaultResource::collection($data);
    }

    public function discounts($request){
        $sort = ($request->sort) ? $request->sort : 'desc';
        $year = $request->year;
        $month = $request->month;
        $laboratory = $request->laboratory;
        
        $query = ListDiscount::query();
        $query->withCount(['payment' => function ($query) use ($laboratory,$year,$month) {
            $query->whereHas('tsr', function ($query) use ($laboratory,$year,$month) {
                $query->where('agency_id', $this->agency)->whereIn('status_id',[2,3,4]);
                ($laboratory) ? $query->where('laboratory_id', $laboratory) : ''; 
                ($month) ? $query->whereMonth('created_at',$month) : '';
                ($year) ? $query->whereYear('created_at',$year) : '';
            });
        }])
        ->orderBy('payment_count', $sort);
        $data = ($request->type == 'payment') ? $query->paginate(10) : $query->get();
        return DefaultResource::collection($data);
    }

    public function tsrs($request){
        $sort = ($request->sort) ? $request->sort : 'desc';
        $year = $request->year;
        $month = $request->month;
        $laboratory = $request->laboratory;

        $query = Customer::query()->select('id','name','is_main','name_id','agency_id')->with('customer_name:id,name,has_branches');
        $query->where('agency_id', $this->agency);
        $query->withCount(['tsrs' => function ($query) use ($year,$month,$laboratory){
            $query->whereIn('status_id', [3,4]);
            ($laboratory) ? $query->where('laboratory_id',$laboratory) : '';
            ($year) ? $query->whereYear('created_at',$year) : '';
            ($month) ? $query->whereMonth('created_at',$month) : '';
        }])
        ->orderBy('tsrs_count', $sort);
        $data = ($request->type == 'tsr') ? $query->paginate(10) : $query->take(10)->get();
        return DefaultResource::collection($data);
    }

    public function total_tsrs($request){
        $sort = ($request->sort) ? $request->sort : 'desc';
        $year = $request->year;
        $month = $request->month;
        $laboratory = $request->laboratory;

        $query = Tsr::query()->whereIn('status_id', [3,4]);
        $query->where('agency_id', $this->agency);
        ($laboratory) ? $query->where('laboratory_id',$laboratory) : '';
        ($year) ? $query->whereYear('created_at',$year) : '';
        ($month) ? $query->whereMonth('created_at',$month) : '';
        $data = $query->count();
        return $data;
    }

    public function spenders($request){
        $sort = ($request->sort) ? $request->sort : 'desc';
        $year = $request->year;
        $month = $request->month;
        $laboratory = $request->laboratory;

        $query = Customer::query();
        $query->select('customers.id','customers.agency_id', 'customers.name','customers.is_main', 'customer_names.name as customer_name','customer_names.has_branches as has_branches',\DB::raw('SUM(tsr_payments.total) as total'))
        ->join('tsrs', 'customers.id', '=', 'tsrs.customer_id')
        ->join('tsr_payments', 'tsrs.id', '=', 'tsr_payments.tsr_id')
        ->join('customer_names', 'customers.name_id', '=', 'customer_names.id')
        ->where('tsr_payments.status_id',7)
        ->where('customers.agency_id',$this->agency)
        ->groupBy('customers.id', 'customers.name')
        ->orderBy('total',$sort);
        ($laboratory) ? $query->where('tsrs.laboratory_id', $laboratory) : '';
        ($year) ? $query->whereYear('tsr_payments.paid_at', $year) : '';
        ($month) ? $query->whereMonth('tsr_payments.paid_at', $month) : '';
        $data = ($request->type == 'spender') ? $query->paginate(10) : $query->take(10)->get();

        return DefaultResource::collection($data);
    }

    public function industry($request){
        $laboratory = $request->laboratory;
        $year = ($request->year) ? $request->year : date('Y');
        $month = ($request->month) ? \DateTime::createFromFormat('F', $request->month)->format('m') : date('m');

        $data = Tsr::select(
            'list_industries.name as name',
            \DB::raw('COUNT(tsrs.id) as warm_bodies'),
            \DB::raw('COUNT(DISTINCT tsrs.customer_id) as consolidated'),
            \DB::raw('(COUNT(DISTINCT tsrs.customer_id) + COUNT(tsrs.id)) as total')
        )
        ->join('customers', 'customers.id', '=', 'tsrs.customer_id') 
        ->join('list_industries', 'list_industries.id', '=', 'customers.industry_id') 
        ->whereYear('tsrs.created_at', $year)
        ->whereMonth('tsrs.created_at', $month)
        ->where('tsrs.agency_id', $this->agency)
        ->groupBy('customers.industry_id', 'list_industries.name')
        ->orderBy('total', 'DESC')
        ->get();
        return $data;
    }

    public function purpose($request){
        $laboratory = $request->laboratory;
        $year = ($request->year) ? $request->year : date('Y');
        $month = ($request->month) ? \DateTime::createFromFormat('F', $request->month)->format('m') : date('m');

        $data = Tsr::select(
            'list_dropdowns.name as name', 
            \DB::raw('COUNT(tsrs.id) as warm_bodies'), 
            \DB::raw('COUNT(DISTINCT tsrs.customer_id) as consolidated'), 
            \DB::raw('(COUNT(tsrs.id) + COUNT(DISTINCT tsrs.customer_id)) as total') 
        )
        ->join('list_dropdowns', 'list_dropdowns.id', '=', 'tsrs.purpose_id') 
        ->whereYear('tsrs.created_at', $year) 
        ->whereMonth('tsrs.created_at', $month)
        ->where('tsrs.agency_id', $this->agency)
        ->groupBy('list_dropdowns.name') 
        ->orderBy('total', 'DESC') 
        ->get();
        return $data;
    }

    public function discount($request){
        $laboratory = $request->laboratory;
        $year = ($request->year) ? $request->year : date('Y');
        $month = ($request->month) ? \DateTime::createFromFormat('F', $request->month)->format('m') : date('m');

        $data = Tsr::select(
            'list_discounts.name as name',
            \DB::raw('COUNT(tsrs.id) as warm_bodies'),
            \DB::raw('COUNT(DISTINCT tsrs.customer_id) as consolidated'),
            \DB::raw('(COUNT(DISTINCT tsrs.customer_id) + COUNT(tsrs.id)) as total')
        )
        ->join('tsr_payments', 'tsr_payments.tsr_id', '=', 'tsrs.id')
        ->join('list_discounts', 'list_discounts.id', '=', 'tsr_payments.discount_id') 
        ->whereYear('tsrs.created_at', $year)
        ->whereMonth('tsrs.created_at', $month)
        ->where('tsrs.agency_id', $this->agency)
        ->groupBy('list_discounts.name')
        ->orderBy('total', 'DESC')
        ->get();
        return $data;
    }

    public function purposefirm($request){
        $laboratory = $request->laboratory;
        $year = ($request->year) ? $request->year : date('Y');
        $month = ($request->month) ? \DateTime::createFromFormat('F', $request->month)->format('m') : date('m');

        $data = Tsr::select(
            'list_dropdowns.name as name', 
            \DB::raw('COUNT(DISTINCT tsrs.customer_id) as consolidated'), 
            \DB::raw('COUNT(DISTINCT CASE WHEN customers.is_new = 1 THEN tsrs.customer_id END) as new'),
            \DB::raw('COUNT(DISTINCT CASE WHEN customers.is_new = 0 THEN tsrs.customer_id END) as old'),
        )
        ->join('customers', 'customers.id', '=', 'tsrs.customer_id') 
        ->join('list_dropdowns', 'list_dropdowns.id', '=', 'tsrs.purpose_id') 
        ->where('customers.classification_id',8)
        ->whereYear('tsrs.created_at', $year) 
        ->whereMonth('tsrs.created_at', $month)
        ->where('tsrs.agency_id', $this->agency)
        ->groupBy('list_dropdowns.name') 
        ->orderBy('consolidated', 'DESC') 
        ->get();
        return $data;
    }

    public function gender($request){
        $sort = ($request->sort) ? $request->sort : 'desc';
        $year = $request->year;
        $month = $request->month;
        $laboratory = $request->laboratory;
  
        $query = ListDropdown::query()->where('classification','Sex')->select('id','name');
        $query->withCount(['customer_gender' => function ($query) use ($year,$month,$laboratory){
            $query->whereHas('tsrs', function ($query) use ($year,$month,$laboratory) {
                $query->where('agency_id', $this->agency)->whereIn('status_id',[1,2,3,4]);
                ($laboratory) ? $query->where('laboratory_id',$laboratory) : ''; 
                ($year) ? $query->whereYear('created_at',$year) : '';
                ($month) ? $query->whereMonth('created_at',$month) : '';
            });
        }])
        ->orderBy('customer_gender_count', $sort);
        $data = $query->get();
        return $data;
    }

    public function industryfirm($request){
        $laboratory = $request->laboratory;
        $year = ($request->year) ? $request->year : date('Y');
        $month = ($request->month) ? \DateTime::createFromFormat('F', $request->month)->format('m') : date('m');

        $data = Tsr::select(
            'list_industries.name as name',
            \DB::raw('COUNT(DISTINCT tsrs.customer_id) as consolidated'),
            \DB::raw('COUNT(DISTINCT CASE WHEN customers.is_new = 1 THEN tsrs.customer_id END) as new'),
            \DB::raw('COUNT(DISTINCT CASE WHEN customers.is_new = 0 THEN tsrs.customer_id END) as old'),
        )
        ->join('customers', 'customers.id', '=', 'tsrs.customer_id') 
        ->join('list_industries', 'list_industries.id', '=', 'customers.industry_id') 
        ->where('customers.classification_id',8)
        ->whereYear('tsrs.created_at', $year)
        ->whereMonth('tsrs.created_at', $month)
        ->where('tsrs.agency_id', $this->agency)
        ->groupBy('customers.industry_id', 'list_industries.name')
        ->orderBy('consolidated', 'DESC')
        ->get();
        return $data;
    }

    public function breakdowns($request){
        $year = ($request->year) ? $request->year : date('Y');
        $month = ($request->month) ? \DateTime::createFromFormat('F', $request->month)->format('m') : date('m');

        return [
            [
                'name' => 'New Customers for the year',
                'consolidated' => Tsr::join('customers', 'customers.id', '=', 'tsrs.customer_id')
                ->where('customers.is_new',1)
                ->whereYear('tsrs.created_at', $year)
                ->whereMonth('tsrs.created_at', $month)
                ->where('tsrs.agency_id', $this->agency)
                ->count(\DB::raw('DISTINCT tsrs.customer_id')),
                'warm_bodies' => Tsr::join('customers', 'customers.id', '=', 'tsrs.customer_id')
                ->where('customers.is_new',1)
                ->whereYear('tsrs.created_at', $year)
                ->whereMonth('tsrs.created_at', $month)
                ->count(\DB::raw('tsrs.id'))
               
            ],
            [
                'name' => 'Old Customers for the year',
                'consolidated' => Tsr::join('customers', 'customers.id', '=', 'tsrs.customer_id')
                ->where('customers.is_new',0)
                ->whereYear('tsrs.created_at', $year)
                ->whereMonth('tsrs.created_at', $month)
                ->where('tsrs.agency_id', $this->agency)
                ->count(\DB::raw('DISTINCT tsrs.customer_id')),
                'warm_bodies' => Tsr::join('customers', 'customers.id', '=', 'tsrs.customer_id')
                ->where('customers.is_new',0)
                ->whereYear('tsrs.created_at', $year)
                ->whereMonth('tsrs.created_at', $month)
                ->count(\DB::raw('tsrs.id'))
            ],
            // [
            //     'name' => 'Firms of the year',
            //     'consolidated' => Tsr::join('customers', 'customers.id', '=', 'tsrs.customer_id')
            //     ->where('customers.classification_id',8)
            //     ->whereYear('tsrs.created_at', $year)
            //     ->whereMonth('tsrs.created_at', $month)
            //     ->count(\DB::raw('DISTINCT tsrs.customer_id')),
            //     'warm_bodies' => Tsr::join('customers', 'customers.id', '=', 'tsrs.customer_id')
            //     ->where('customers.classification_id',8)
            //     ->whereYear('tsrs.created_at', $year)
            //     ->whereMonth('tsrs.created_at', $month)
            //     ->count(\DB::raw('tsrs.id'))
            // ],
            [
                'name' => 'Student 20% Discount',
                'consolidated' => Tsr::join('tsr_payments', 'tsr_payments.tsr_id', '=', 'tsrs.id')
                ->join('list_discounts', 'list_discounts.id', '=', 'tsr_payments.discount_id') 
                ->where('tsr_payments.discount_id',2)
                ->whereYear('tsrs.created_at', $year)
                ->whereMonth('tsrs.created_at', $month)
                ->where('tsrs.agency_id', $this->agency)
                ->count(\DB::raw('DISTINCT tsrs.customer_id')),
                'warm_bodies' => Tsr::join('tsr_payments', 'tsr_payments.tsr_id', '=', 'tsrs.id')
                ->join('list_discounts', 'list_discounts.id', '=', 'tsr_payments.discount_id') 
                ->where('tsr_payments.discount_id',2)
                ->whereYear('tsrs.created_at', $year)
                ->whereMonth('tsrs.created_at', $month)
                ->count(\DB::raw('tsrs.id'))
            ],
            [
                'name' => 'Senior Citizen Customers',
                'consolidated' => Tsr::join('customers', 'customers.id', '=', 'tsrs.customer_id') 
                ->join('list_dropdowns', 'list_dropdowns.id', '=', 'customers.sex_id') 
                ->where('customers.type_id',67)
                ->whereYear('tsrs.created_at', $year)
                ->whereMonth('tsrs.created_at', $month)
                ->where('tsrs.agency_id', $this->agency)
                ->count(\DB::raw('DISTINCT tsrs.customer_id')),
                'warm_bodies' => Tsr::join('customers', 'customers.id', '=', 'tsrs.customer_id') 
                ->join('list_industries', 'list_industries.id', '=', 'customers.industry_id') 
                ->where('customers.type_id',67)
                ->whereYear('tsrs.created_at', $year)
                ->whereMonth('tsrs.created_at', $month)
                ->count(\DB::raw('tsrs.id'))
            ],
            [
                'name' => 'Private Individual Customers',
                'consolidated' => Tsr::join('customers', 'customers.id', '=', 'tsrs.customer_id') 
                ->join('list_dropdowns', 'list_dropdowns.id', '=', 'customers.sex_id') 
                ->where('customers.type_id',66)
                ->whereYear('tsrs.created_at', $year)
                ->whereMonth('tsrs.created_at', $month)
                ->where('tsrs.agency_id', $this->agency)
                ->count(\DB::raw('DISTINCT tsrs.customer_id')),
                'warm_bodies' => Tsr::join('customers', 'customers.id', '=', 'tsrs.customer_id') 
                ->join('list_industries', 'list_industries.id', '=', 'customers.industry_id') 
                ->where('customers.type_id',66)
                ->whereYear('tsrs.created_at', $year)
                ->whereMonth('tsrs.created_at', $month)
                ->count(\DB::raw('tsrs.id'))
            ],
            [
                'name' => 'Male Customers',
                'consolidated' => Tsr::join('customers', 'customers.id', '=', 'tsrs.customer_id') 
                ->join('list_dropdowns', 'list_dropdowns.id', '=', 'customers.sex_id') 
                ->where('customers.type_id',70)
                ->whereYear('tsrs.created_at', $year)
                ->whereMonth('tsrs.created_at', $month)
                ->where('tsrs.agency_id', $this->agency)
                ->count(\DB::raw('DISTINCT tsrs.customer_id')),
                'warm_bodies' => Tsr::join('customers', 'customers.id', '=', 'tsrs.customer_id') 
                ->join('list_industries', 'list_industries.id', '=', 'customers.industry_id') 
                ->where('customers.sex_id',70)
                ->whereYear('tsrs.created_at', $year)
                ->whereMonth('tsrs.created_at', $month)
                ->count(\DB::raw('tsrs.id'))
            ],
            [
                'name' => 'Female Customers',
                'consolidated' => Tsr::join('customers', 'customers.id', '=', 'tsrs.customer_id') 
                ->join('list_dropdowns', 'list_dropdowns.id', '=', 'customers.sex_id') 
                ->where('customers.sex_id',71)
                ->whereYear('tsrs.created_at', $year)
                ->whereMonth('tsrs.created_at', $month)
                ->where('tsrs.agency_id', $this->agency)
                ->count(\DB::raw('DISTINCT tsrs.customer_id')),
                'warm_bodies' => Tsr::join('customers', 'customers.id', '=', 'tsrs.customer_id') 
                ->join('list_industries', 'list_industries.id', '=', 'customers.industry_id') 
                ->where('customers.sex_id',71)
                ->whereYear('tsrs.created_at', $year)
                ->whereMonth('tsrs.created_at', $month)
                ->count(\DB::raw('tsrs.id'))
            ]
        ];
    } 
}