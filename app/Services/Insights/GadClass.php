<?php

namespace App\Services\Insights;

use App\Models\Customer;
use App\Models\TsrPayment;
use App\Models\ListDropdown;
use App\Models\AgencyConfiguration;
use App\Models\ListLaboratory;
use App\Http\Resources\DefaultResource;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\GadExport;
use App\Models\ListRole;

class GadClass
{
    public function __construct()
    {   
        $this->agency = (count(\Auth::user()->myroles) > 0) ? \Auth::user()->myroles[0]->agency_id : null;
        $this->ids =(\Auth::check()) ? (\Auth::user()->role == 'Administrator') ? [] : AgencyConfiguration::where('agency_id',$this->agency)->value('laboratories') : '';
    }

    public function excel(){
        return Excel::download(new GadExport(), 'gad.xlsx');
    }

    public function total($request){
        $total = Customer::where('agency_id',$this->agency)->where('is_active',1)->count();
        return $total;
    }

    public function discounts($request){
       
        return [
            [
                'name' => 'Women\'s Month',
                'count' => TsrPayment::where('discount_id',9)->count(),
                'total' => TsrPayment::where('discount_id', 9)->sum(\DB::raw('CAST(discount AS DECIMAL(10,2))'))
            ],
        ];
    }

    public function roles(){
        $roleStats = \DB::table(
            \DB::table('user_roles')
                ->select('user_id', 'role_id')
                ->groupBy('user_id', 'role_id')
        , 'ur')
        ->join('list_roles as r', 'r.id', '=', 'ur.role_id')
        ->join('users as u', 'u.id', '=', 'ur.user_id')
        ->leftJoin('user_profiles as up', 'up.user_id', '=', 'u.id')
        ->select(
            'r.name as role_name',
            \DB::raw("SUM(CASE WHEN up.sex = 'male' THEN 1 ELSE 0 END) as male_count"),
            \DB::raw("SUM(CASE WHEN up.sex = 'female' THEN 1 ELSE 0 END) as female_count"),
            \DB::raw("COUNT(*) as total_users"),
            \DB::raw("ROUND(SUM(CASE WHEN up.sex = 'male' THEN 1 ELSE 0 END) * 100.0 / NULLIF(COUNT(*), 0), 2) as male_percentage"),
            \DB::raw("ROUND(SUM(CASE WHEN up.sex = 'female' THEN 1 ELSE 0 END) * 100.0 / NULLIF(COUNT(*), 0), 2) as female_percentage")
        )
        ->where('u.is_active',1)
        ->groupBy('r.id', 'r.name')
        ->get();

        return $roleStats;
    }

    public function customers($request){
        $array = [
            ['name' => 'Female','count' => Customer::where('agency_id',$this->agency)->where('female_id',73)->where('is_active',1)->count()],
            ['name' => 'Female-led','count' => Customer::where('agency_id',$this->agency)->where('female_id',74)->where('is_active',1)->count()],
            ['name' => 'Male','count' =>  Customer::where('agency_id',$this->agency)->where('sex_id',70)->where('is_active',1)->count()],
            ['name' => 'Not Applicable','count' =>  Customer::where('agency_id',$this->agency)->where('sex_id',72)->where('is_active',1)->count()],
        ];
        return $array;
    }

    public function values($request){
        $year = $request->year;
        $month = $request->month;
        $laboratory = $request->laboratory;

        $total1 = TsrPayment::whereHas('tsr', function ($query) use ($laboratory,$year,$month){
            $query->where('agency_id', $this->agency)->where('status_id','!=',5);
            $query->whereHas('customer', function ($query) {
                $query->where('female_id',73);
            });
            $query->when($laboratory, function ($query, $laboratory) {
                $query->where('laboratory_id',$laboratory);
            });
            $query->whereYear('created_at',$year);
        })->where('status_id',7)->where('is_paid',1)->where('is_child',0)->sum('total');

        $total2 = TsrPayment::whereHas('tsr', function ($query) use ($laboratory,$year,$month){
            $query->where('agency_id', $this->agency)->where('status_id','!=',5);
            $query->whereHas('customer', function ($query) {
                $query->where('female_id',74);
            });
            $query->when($laboratory, function ($query, $laboratory) {
                $query->where('laboratory_id',$laboratory);
            });
            $query->whereYear('created_at',$year);
        })->where('status_id',7)->where('is_paid',1)->where('is_child',0)->sum('total');

        $total3 = TsrPayment::whereHas('tsr', function ($query) use ($laboratory,$year){
            $query->where('agency_id', $this->agency)->where('status_id','!=',5);
            $query->whereHas('customer', function ($query) {
                $query->where('sex_id',70);
            });
            $query->when($laboratory, function ($query, $laboratory) {
                $query->where('laboratory_id',$laboratory);
            });
            $query->whereYear('created_at',$year);
        })->where('status_id',7)->where('is_paid',1)->where('is_child',0)->sum('total');

        $total4 = TsrPayment::whereHas('tsr', function ($query) use ($laboratory,$year){
            $query->where('agency_id', $this->agency)->where('status_id','!=',5);
            $query->whereHas('customer', function ($query) {
                $query->where('sex_id',72);
            });
            $query->when($laboratory, function ($query, $laboratory) {
                $query->where('laboratory_id',$laboratory);
            });
            $query->whereYear('created_at',$year);
        })->where('status_id',7)->where('is_paid',1)->where('is_child',0)->sum('total');

        $array = [
            ['name' => 'Female','count' => $total1],
            ['name' => 'Female-led','count' => $total2],
            ['name' => 'Male','count' => $total3],
            ['name' => 'Not Applicable','count' => $total4],
        ];
        return $array;
    }

    public function purposes($request){
        $sort = ($request->sort) ? $request->sort : 'desc';
        $year = $request->year;
        $month = $request->month;
        $laboratory = $request->laboratory;
        
        $query = ListDropdown::query()->where('classification','Purpose');
        $query->withCount([
            'customer_purpose as woman_count' => function ($query) use ($laboratory,$month,$year) {
                $query->where('agency_id', $this->agency)->whereIn('status_id',[2,3,4]);
                $query->whereHas('customer', function ($query) {
                    $query->where('female_id', 73);
                });
                ($laboratory) ? $query->where('laboratory_id',$laboratory) : '';
                ($month) ? $query->whereMonth('created_at',$month) : '';
                ($year) ? $query->whereYear('created_at',$year) : '';
            },
            'customer_purpose as woman_led_count' => function ($query) use ($laboratory,$month,$year) {
                $query->where('agency_id', $this->agency)->whereIn('status_id',[2,3,4]);
                $query->whereHas('customer', function ($query) {
                    $query->where('female_id', 74);
                });
                ($laboratory) ? $query->where('laboratory_id',$laboratory) : '';
                ($month) ? $query->whereMonth('created_at',$month) : '';
                ($year) ? $query->whereYear('created_at',$year) : '';
            },
            'customer_purpose as male_count' => function ($query) use ($laboratory,$month,$year) {
                $query->where('agency_id', $this->agency)->whereIn('status_id',[2,3,4]);
                $query->whereHas('customer', function ($query) {
                    $query->where('sex_id', 70);
                });
                ($laboratory) ? $query->where('laboratory_id',$laboratory) : '';
                ($month) ? $query->whereMonth('created_at',$month) : '';
                ($year) ? $query->whereYear('created_at',$year) : '';
            },
            
    ]);
        $data = ($request->type == 'purpose') ? $query->paginate(10) : $query->get();
        return DefaultResource::collection($data);
    }

    public function laboratory($request){
        $lab_id = ($this->ids) ? array_column($this->ids, 'value') : null;
        $sort = ($request->sort) ? $request->sort : 'desc';
        $year = $request->year;
        $month = $request->month;
  
        $query = ListLaboratory::query()->select('id','name');
        $query->whereIn('id',$lab_id);
        $query->withCount(['tsrs as woman_count' => function ($query) use ($year,$month){
            $query->whereIn('status_id', [3,4])->where('agency_id', $this->agency);
            $query->whereHas('customer', function ($query) {
                $query->where('female_id', 73);
            });
            ($year) ? $query->whereYear('created_at',$year) : '';
            ($month) ? $query->whereMonth('created_at',$month) : '';
        }]);
        $query->withCount(['tsrs as woman_led_count' => function ($query) use ($year,$month){
            $query->whereIn('status_id', [3,4])->where('agency_id', $this->agency);
            $query->whereHas('customer', function ($query) {
                $query->where('female_id', 74);
            });
            ($year) ? $query->whereYear('created_at',$year) : '';
            ($month) ? $query->whereMonth('created_at',$month) : '';
        }]);
        $query->withCount(['tsrs as male_count' => function ($query) use ($year,$month){
            $query->whereIn('status_id', [3,4])->where('agency_id', $this->agency);
            $query->whereHas('customer', function ($query) {
                $query->where('sex_id', 70);
            });
            ($year) ? $query->whereYear('created_at',$year) : '';
            ($month) ? $query->whereMonth('created_at',$month) : '';
        }]);
        $data = $query->get();
        return DefaultResource::collection($data);
    }


    public function gender(){
        return Customer::select(\DB::raw('count(*) as total'))->whereIn('sex_id',[70,71,72])->groupBy('sex_id')->get();
    }

    public function chart($request){
        $year = ($request->year) ? $request->year : date('Y') ;
        $laboratory = $request->laboratory;
        $months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];

        $first = []; 
        for($month = 1; $month <= 12; $month++){
            $count = TsrPayment::whereHas('tsr', function ($query) use ($laboratory,$year,$month){
                $query->where('agency_id', $this->agency)->where('status_id','!=',5);
                $query->whereHas('customer', function ($query) {
                    $query->where('sex_id',70);
                });
                $query->when($laboratory, function ($query, $laboratory) {
                    $query->where('laboratory_id',$laboratory);
                });
                $query->whereYear('created_at',$year)->whereMonth('created_at',$month);
            })->where('status_id',7)->where('is_paid',1)->where('is_child',0)->sum('total');
            $first[] = $count;
        }
        $second = [];
        for($month = 1; $month <= 12; $month++){
            $count = TsrPayment::whereHas('tsr', function ($query) use ($laboratory,$year,$month){
                $query->where('agency_id', $this->agency)->where('status_id','!=',5);
                $query->whereHas('customer', function ($query) {
                    $query->where('female_id',73);
                });
                $query->when($laboratory, function ($query, $laboratory) {
                    $query->where('laboratory_id',$laboratory);
                });
                $query->whereYear('created_at',$year)->whereMonth('created_at',$month);
            })->where('status_id',7)->where('is_paid',1)->where('is_child',0)->sum('total');
            $second[] = $count;
        }
        $third = [];
        for($month = 1; $month <= 12; $month++){
            $count = TsrPayment::whereHas('tsr', function ($query) use ($laboratory,$year,$month){
                $query->where('agency_id', $this->agency)->where('status_id','!=',5);
                $query->whereHas('customer', function ($query) {
                    $query->where('female_id',74);
                });
                $query->when($laboratory, function ($query, $laboratory) {
                    $query->where('laboratory_id',$laboratory);
                });
                $query->whereYear('created_at',$year)->whereMonth('created_at',$month);
            })->whereIn('status_id',[6,18])->where('is_paid',0)->where('is_child',0)->sum('total');
            $third[] = $count;
        }
        $fourth = [];
        for($month = 1; $month <= 12; $month++){
            $count = TsrPayment::whereHas('tsr', function ($query) use ($laboratory,$year,$month){
                $query->where('agency_id', $this->agency)->where('status_id','!=',5);
                $query->when($laboratory, function ($query, $laboratory) {
                    $query->where('laboratory_id',$laboratory);
                });
                $query->whereYear('created_at',$year)->whereMonth('created_at',$month);
            })->where('discount_id',9)->where('status_id',8)->where('is_free',1)->where('is_child',0)->sum('discount');
            $fourth[] = $count;
        }

        $arr = [
            [
                'name' => 'Male',
                'data' => $first
            ],
            [
                'name' => 'Woman',
                'data' => $second
            ],
            [
                'name' => 'Woman-led', 
                'data' => $third
            ],
            [
                'name' => 'Woman\'s Month', 
                'data' => $fourth
            ]
        ];
        
        return $y =[
            'categories' => $months,
            'lists' => $arr,
        ];
    }
}
