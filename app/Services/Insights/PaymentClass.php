<?php

namespace App\Services\Insights;

use App\Models\TsrPayment;
use App\Models\ListStatus;
use App\Models\ListDropdown;
use App\Models\ListDiscount;
use App\Exports\DiscountExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Resources\DefaultResource;

class PaymentClass
{
    public function __construct()
    {   
        $this->agency = (count(\Auth::user()->myroles) > 0) ? \Auth::user()->myroles[0]->agency_id : null;
    }

    public function chart($request){
        $year = ($request->year) ? $request->year : date('Y') ;
        $laboratory = $request->laboratory;
        $months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];

        $first = []; 
        for($month = 1; $month <= 12; $month++){
            $count = TsrPayment::whereHas('tsr', function ($query) use ($laboratory,$year,$month){
                $query->where('agency_id', $this->agency)->where('status_id','!=',5);
                $query->when($laboratory, function ($query, $laboratory) {
                    $query->where('laboratory_id',$laboratory);
                });
                $query->whereYear('created_at',$year)->whereMonth('created_at',$month);
            })->where('status_id',7)->where('is_paid',1)->where('is_child',0)->sum('total');
            $first[] = $count;
        }
        if ($year == 2024 && $this->agency == 14) {
            $manualCollected = [
                540853.4, // Jan
                331486,   // Feb
                778483.6, // Mar
                621516.8, // Apr
                708506,   // May
                383944,   // Jun
                580560,   // Jul
                427169,   // Aug
                116860,   // Sep
            ];
            // replace only the first 9 months
            for ($i = 0; $i < count($manualCollected); $i++) {
                $first[$i] = $manualCollected[$i];
            }
        }
        $second = [];
        for($month = 1; $month <= 12; $month++){
            $count = TsrPayment::whereHas('tsr', function ($query) use ($laboratory,$year,$month){
                $query->where('agency_id', $this->agency)->where('status_id','!=',5);
                $query->when($laboratory, function ($query, $laboratory) {
                    $query->where('laboratory_id',$laboratory);
                });
                $query->whereYear('created_at',$year)->whereMonth('created_at',$month);
            })->whereIn('status_id',[6,18])->where('is_paid',0)->where('is_child',0)->sum('total');
            $second[] = $count;
        }
        if ($year == 2024 && $this->agency == 14) {
            $manualCollected1 = [
                0, // Jan
                0,   // Feb
                0, // Mar
                0, // Apr
                0,   // May
                0,   // Jun
                0,   // Jul
                0,   // Aug
                9320,   // Sep
            ];
            // replace only the first 9 months
            for ($i = 0; $i < count($manualCollected1); $i++) {
                $second[$i] = $manualCollected1[$i];
            }
        }
        $third = [];
        for($month = 1; $month <= 12; $month++){
            $count = TsrPayment::whereHas('tsr', function ($query) use ($laboratory,$year,$month){
                $query->where('agency_id', $this->agency)->where('status_id','!=',5);
                $query->when($laboratory, function ($query, $laboratory) {
                    $query->where('laboratory_id',$laboratory);
                });
                $query->whereYear('created_at',$year)->whereMonth('created_at',$month);
            })->where('status_id',8)->where('is_free',1)->where('is_child',0)->sum('discount');
            $third[] = $count;
        }

        $arr = [
            [
                'name' => 'Collected Amount',
                'data' => $first
            ],
            [
                'name' => 'Uncollected Amount', 
                'data' => $second
            ],
            [
                'name' => 'Complimentary Service Amount', 
                'data' => $third
            ]
        ];
        
        return $y =[
            'categories' => $months,
            'lists' => $arr,
        ];
    }

    public function info($request){
        $sort = ($request->sort) ? $request->sort : 'desc';
        $year = $request->year;
        $month = $request->month;
        $laboratory = $request->laboratory;

        return [
            [
                'name' => 'Collected Amount (Receipted)',
                'description' => ' Total amount successfully collected and receipted',
                'total' => (function () use ($laboratory, $month, $year) {
                    $total = TsrPayment::whereHas('tsr', function ($query) use ($laboratory, $month, $year) {
                            $query->where('agency_id', $this->agency)->where('status_id', '!=', 5);
                            $query->when($laboratory, function ($query, $laboratory) {
                                $query->where('laboratory_id', $laboratory);
                            });
                            if ($year) {
                                $query->whereYear('created_at', $year);
                            }
                            if ($month) {
                                $query->whereMonth('created_at', $month);
                            }
                        })
                        ->where('status_id', 7)
                        ->where('is_paid', 1)
                        ->where('is_child', 0)
                        ->sum('total');

                    // ✅ Add manual values for 2024 (Jan–Sep)
                    if ($year == 2024 && $this->agency == 14) {
                        $manualCollected = [
                            540853.4, // Jan
                            331486,   // Feb
                            778483.6, // Mar
                            621516.8, // Apr (note: you said 621,516.8, not 612,516.8)
                            708506,   // May
                            383944,   // Jun
                            580560,   // Jul
                            427169,   // Aug
                            116860,   // Sep
                        ];

                        // ✅ If a specific month is selected → only add that month’s value
                        if ($month && $month >= 1 && $month <= 9) {
                            $total += $manualCollected[$month - 1];
                        } 
                        // ✅ If NO specific month → add all Jan–Sep manually
                        elseif (!$month) {
                            $total += array_sum($manualCollected);
                        }
                    }

                    return $total;
                })(),
                'icon' => 'ri-checkbox-circle-fill fs-20',
                'color' => 'text-success'
            ],
            [
                'name' => 'Uncollected Amount',
                'description' => 'Total pending payments not yet received',
                'total' => (function () use ($laboratory, $year, $month) {
                    $total = TsrPayment::whereHas('tsr', function ($query) use ($laboratory, $year, $month) {
                            $query->where('agency_id', $this->agency)->where('status_id', '!=', 5);
                            $query->when($laboratory, function ($query, $laboratory) {
                                $query->where('laboratory_id', $laboratory);
                            });
                            if ($year) {
                                $query->whereYear('created_at', $year);
                            }
                            if ($month) {
                                $query->whereMonth('created_at', $month);
                            }
                        })
                        ->whereIn('status_id', [6, 18])
                        ->where('is_paid', 0)
                        ->where('is_child', 0)
                        ->sum('total');

                    // ✅ Add manual ₱9,320 for year 2024
                    if ($year == 2024 && $this->agency == 14) {
                        $total += 9320;
                    }

                    return $total;
                })(),
                'icon' => 'ri-close-circle-fill fs-20',
                'color' => 'text-danger'
            ],
            [
                'name' => 'Total Transaction Value',
                'description' => 'Total monetary value of all transactions',
                'total' => TsrPayment::whereHas('tsr', function ($query) use ($laboratory,$year,$month){
                    $query->where('agency_id', $this->agency)->where('status_id','!=',5);
                    $query->when($laboratory, function ($query, $laboratory) {
                        $query->where('laboratory_id',$laboratory);
                    });
                    ($year) ? $query->whereYear('created_at',$year) : '';
                    ($month) ? $query->whereMonth('created_at',$month) : '';
                })->whereIn('status_id',[6,7,18])->where('is_child',0)->sum('total'),
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
                'name' => 'Complimentary Service Amount',
                'description' => 'Total value of services provided free of charge.',
                'total' => TsrPayment::whereHas('tsr', function ($query) use ($laboratory,$year,$month){
                    $query->where('agency_id', $this->agency)->where('status_id','!=',5);
                    $query->when($laboratory, function ($query, $laboratory) {
                        $query->where('laboratory_id',$laboratory);
                    });
                    ($year) ? $query->whereYear('created_at',$year) : '';
                    ($month) ? $query->whereMonth('created_at',$month) : '';
                })->where('status_id',8)->where('is_free',1)->where('is_child',0)->sum('discount'),
                'icon' => 'ri-hearts-fill fs-20',
                'color' => 'text-warning'
            ],
            [
                'name' => 'Aggregate Collection Value',
                'description' => 'Total collected, payments and complimentary services.',
                'total' => TsrPayment::whereHas('tsr', function ($query) use ($laboratory,$year,$month) {
                    $query->where('agency_id', $this->agency)->where('status_id','!=',5);
                    $query->when($laboratory, function ($query, $laboratory) {
                        $query->where('laboratory_id',$laboratory);
                    });
                    ($year) ? $query->whereYear('created_at',$year) : '';
                    ($month) ? $query->whereMonth('created_at',$month) : '';
                })->whereIn('status_id',[6,7,18])->where('is_child',0)->sum('total') + TsrPayment::whereHas('tsr', function ($query) use ($laboratory,$year,$month){
                    $query->where('agency_id', $this->agency)->where('status_id','!=',5);
                    $query->when($laboratory, function ($query, $laboratory) {
                        $query->where('laboratory_id',$laboratory);
                    });
                    ($year) ? $query->whereYear('created_at',$year) : '';
                    ($month) ? $query->whereMonth('created_at',$month) : '';
                })->where('status_id',8)->where('is_free',1)->where('is_child',0)->sum('discount'),
                'icon' => 'ri-medal-fill fs-20',
                'color' => 'text-info'
            ]
        ];
    }

    public function discounts($request){
        $sort = ($request->sort) ? $request->sort : 'desc';
        $year = $request->year;
        $month = $request->month;
        $laboratory = $request->laboratory;
  
        $query = ListDiscount::query()->whereHas('agencies', function ($q){
            $q->where('agency_id',$this->agency);
        })->select('id','name');
        $query->withCount(['payment' => function ($query) use ($year,$month,$laboratory){
            $query->where('is_child',0);
            $query->whereHas('tsr',function ($query) use ($year,$month,$laboratory) {
                $query->where('agency_id', $this->agency)->whereIn('status_id',[1,2,3,4]);
                ($laboratory) ? $query->where('laboratory_id',$laboratory) : ''; 
                ($year) ? $query->whereYear('created_at',$year) : '';
                ($month) ? $query->whereMonth('created_at',$month) : '';
            });
        }])
        ->orderBy('payment_count', $sort);
        $data = $query->get();
        return DefaultResource::collection($data);
    }

     public function list_discount(){
        $data = ListDiscount::whereHas('agencies', function ($q){
            $q->where('agency_id',$this->agency);
        })->get()->map(function ($item) {
            return [
                'value' => $item->id,
                'name' => $item->name
            ];
        });
        return $data;
    }

    public function statuses($request){
        $sort = ($request->sort) ? $request->sort : 'desc';
        $year = $request->year;
        $month = $request->month;
        $laboratory = $request->laboratory;
  
        $query = ListStatus::query()->where('type','Payment')->select('id','name');
        $query->withCount(['payment' => function ($query) use ($year,$month,$laboratory){
            $query->where('is_child',0);
            $query->whereHas('tsr',function ($query) use ($year,$month,$laboratory) {
                $query->where('agency_id', $this->agency)->whereIn('status_id',[1,2,3,4]);
                ($laboratory) ? $query->where('laboratory_id',$laboratory) : ''; 
                ($year) ? $query->whereYear('created_at',$year) : '';
                ($month) ? $query->whereMonth('created_at',$month) : '';
            });
        }])
        ->orderBy('payment_count', $sort);
        $data = $query->get();
        return DefaultResource::collection($data);
    }

    public function methods($request){
        $sort = ($request->sort) ? $request->sort : 'desc';
        $year = $request->year;
        $month = $request->month;
        $laboratory = $request->laboratory;
  
        $query = ListDropdown::query()->where('classification','Payment Mode')->select('id','name');
        $query->withCount(['payment' => function ($query) use ($year,$month,$laboratory){
            $query->where('is_child',0);
            $query->whereHas('tsr',function ($query) use ($year,$month,$laboratory) {
                $query->where('agency_id', $this->agency)->whereIn('status_id',[1,2,3,4]);
                ($laboratory) ? $query->where('laboratory_id',$laboratory) : ''; 
                ($year) ? $query->whereYear('created_at',$year) : '';
                ($month) ? $query->whereMonth('created_at',$month) : '';
            });
        }])
        ->orderBy('payment_count', $sort);
        $data = $query->get();
        return DefaultResource::collection($data);
    }

    public function excel($request){
        $year = ($request->year) ? $request->year : date('Y');
        return Excel::download(new DiscountExport($year,$this->agency,$request->discount), 'discount'.$year.'.xlsx');
    }
}
