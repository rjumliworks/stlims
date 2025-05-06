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

    public function discounts($request){
       
        return [
            [
                'name' => 'Women\'s Month',
                'count' => TsrPayment::where('discount_id',9)->count(),
                'total' => TsrPayment::where('discount_id', 9)->sum(\DB::raw('CAST(discount AS DECIMAL(10,2))'))
            ],
            // [
            //     'name' => 'Student (Female)',
            //     'count' => 1,
            //     'total' => 0
            // ],
        ];
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
