<?php

namespace App\Services\Dashboard;

use Carbon\Carbon;
use App\Models\Tsr;
use App\Models\TsrRelease;
use App\Models\TsrSample;
use App\Models\TsrAnalysis;
use App\Models\TsrPayment;
use App\Models\TsrPaymentDeduction;
use App\Models\ListStatus;

class CroClass
{
    public function __construct()
    {
        $this->agency = (\Auth::check()) ? (count(\Auth::user()->myroles) > 0) ? \Auth::user()->myroles[0]->agency_id : null : '';
        $this->start = now()->copy()->startOfMonth()->format('Y-m-d');
        $this->end = now()->copy()->endOfMonth()->format('Y-m-d');
    }

    public function info($request){
        return [
            'month' => date('F'),
            'date' => $this->start.' to '.$this->end
        ];
    }

    public function counts($request){
        return [
            // $this->fees($request),
            $this->tsrs($request),
            $this->samples($request),
            $this->testservices($request),
        ];
    }

    private function tsrs($request){
        $series = [];
        $data = Tsr::select(\DB::raw('DATE(created_at) AS x'), \DB::raw('count(*) AS y'))
        ->where('agency_id', $this->agency)
        ->whereIn('status_id',[1,2,3,4]) //status is completed
        ->whereBetween('created_at', [$this->start, $this->end])
        ->groupBy(\DB::raw('DATE(created_at)'))
        ->orderBy(\DB::raw('DATE(created_at)'))
        ->get()->map(function ($item) {
            return [
                'x' => date('F d, Y',strtotime($item->x)),
                'y' => $item->y
            ];
        });
        $info = [
            'name' => 'Customer Served',
            'data' => $data
        ];
        array_push($series,$info);
        return $arr = [
            'name' => 'Customer Served',
            'icon' => 'ri-hand-coin-fill',
            'color' => '',
            'series' => $series,
            'total' => Tsr::whereBetween('created_at',[$this->start,$this->end])->whereIn('status_id',[1,2,3,4])->where('agency_id', $this->agency)->count()
        ];
    }

    private function samples($request){
        $series = [];
        $data = TsrSample::select(\DB::raw('DATE(created_at) AS x'), \DB::raw('count(*) AS y'))
        ->whereHas('tsr', function ($query){
            $query->where('agency_id', $this->agency)->whereIn('status_id',[1,2,3,4]);
        })
        ->whereBetween('created_at', [$this->start, $this->end])
        ->groupBy(\DB::raw('DATE(created_at)'))
        ->orderBy(\DB::raw('DATE(created_at)'))
        ->get()->map(function ($item) {
            return [
                'x' => date('F d, Y',strtotime($item->x)),
                'y' => $item->y
            ];
        });
        $info = [
            'name' => 'Samples Received',
            'data' => $data
        ];
        array_push($series,$info);
        return $arr = [
            'name' => 'Samples Received',
            'icon' => 'ri-inbox-archive-fill',
            'color' => '',
            'series' => $series,
            'total' => TsrSample::whereBetween('created_at',[$this->start,$this->end])->whereHas('tsr', function ($query){
                $query->where('agency_id', $this->agency)->whereIn('status_id',[1,2,3,4]);
            })->count()
        ];
    }

    private function testservices($request){
        $series = [];
        $data = TsrAnalysis::select(\DB::raw('DATE(created_at) AS x'), \DB::raw('count(*) AS y'))
        ->whereHas('sample', function ($query){
            $query->whereHas('tsr', function ($query){
                $query->where('agency_id', $this->agency)->whereIn('status_id',[1,2,3,4]);
            });
        })
        ->whereBetween('created_at', [$this->start, $this->end])
        ->groupBy(\DB::raw('DATE(created_at)'))
        ->orderBy(\DB::raw('DATE(created_at)'))
        ->get()->map(function ($item) {
            return [
                'x' => date('F d, Y',strtotime($item->x)),
                'y' => $item->y
            ];
        });
        $info = [
            'name' => 'Services Conducted',
            'data' => $data
        ];
        array_push($series,$info);
        return $arr = [
            'name' => 'Services Conducted',
            'icon' => 'ri-flask-fill',
            'color' => '',
            'series' => $series,
            'total' => TsrAnalysis::whereBetween('created_at',[$this->start,$this->end])->whereHas('sample', function ($query){
                $query->whereHas('tsr', function ($query){
                    $query->where('agency_id', $this->agency)->whereIn('status_id',[1,2,3,4]);
                });
            })
           ->count()
        ];
    }

    private function fees($request){
        $month = ($request->month) ? \DateTime::createFromFormat('F', $request->month)->format('m') : date('m');  
        $year = ($request->year) ? $request->year : date('Y');
        $wallet = TsrPaymentDeduction::whereMonth('created_at',$month)->whereYear('created_at',$year)
        ->whereHas('payment', function ($query){
            $query->whereHas('tsr', function ($query){
                $query->where('agency_id', $this->agency);
            });
        })->sum('amount');

        $contract = TsrPayment::where('status_id',18)->whereHas('tsr', function ($query) use ($month,$year){
            $query->whereMonth('created_at',$month)->whereYear('created_at',$year)->where('agency_id', $this->agency);
        })->sum('total');

        $pending = TsrPayment::where('status_id',6)->whereHas('tsr', function ($query) use ($month,$year){
            $query->whereMonth('created_at',$month)->whereYear('created_at',$year)->where('agency_id', $this->agency);
        })->sum('total');

        $gratis = TsrPayment::whereMonth('paid_at',$month)->whereYear('paid_at',$year)->where('is_free',1)
        ->whereHas('tsr', function ($query){
            $query->where('agency_id', $this->agency);
        })->sum('discount');

        $discount = TsrPayment::whereMonth('paid_at',$month)->whereYear('paid_at',$year)->where('is_free',0)
        ->whereHas('tsr', function ($query){
            $query->where('agency_id', $this->agency);
        })->sum('discount');

        $total = TsrPayment::where('is_child',0)->where('paid_at','!=',NULL)->whereHas('tsr', function ($query) use ($month,$year){
            $query->where('agency_id', $this->agency)->whereMonth('created_at',$month)->whereYear('created_at',$year)->where('status_id','!=',5);
        })->sum('total');

        return $arr = [
            'name' => 'Actual Fees Collected',
            'icon' => 'ri-bank-card-fill',
            'color' => 'bg-info-subtle',
            'total' => $total+$pending+$contract+$wallet+$gratis+$discount
        ];
    }

    public function notices($request){
        return [
            [
                'name' => 'Memorandum of Agreement (MOA)',
                'description' => 'TSR payment covered by the contract',
                'count' => Tsr::whereHas('payment', function ($query) {
                    $query->where('status_id',18);
                })->where('agency_id', $this->agency)->count(),
                'icon' => 'ri-secure-payment-line',
                'color' => 'bg-primary-subtle text-primary'
            ]
        ];
    }

    public function reminders($request){
        return [
            [
                'name' => 'Due Soon',
                'description' => '5 days ahead of the due date',
                'count' => Tsr::whereBetween('due_at', [Carbon::now()->startOfDay(), Carbon::now()->addDays(5)->endOfDay()])->where('agency_id', $this->agency)->where('status_id','!=',4)->count(),
                'icon' => 'ri-error-warning-line fs-20',
                'color' => 'text-warning'
            ],
            [
                'name' => 'Overdue Request',
                'description' => 'Keep track of all laboratory tasks',
                'count' => Tsr::whereDate('due_at','<',now())->where('agency_id', $this->agency)->whereNotIn('status_id',[4,5])->count(),
                'icon' => 'ri-error-warning-fill fs-20',
                'color' => 'text-danger'
            ],
            [
                'name' => 'For Release',
                'description' => 'Reports ready for release within 30 days',
                'count' => TsrRelease::where('status_id',26)->whereHas('tsr', function ($query){
                    $query->where('agency_id', $this->agency);
                })
                ->where('created_at','>=', Carbon::now()->subDays(30))
                ->count(),
                'icon' => 'ri-alert-fill fs-20',
                'color' => 'text-success'
            ],
            [
                'name' => 'Unclaimed Reports',
                'description' => 'Reports unclaimed for more than 30 days',
                'count' => TsrRelease::where('status_id',26)->where('created_at','<=', Carbon::now()->subDays(30))->whereHas('tsr', function ($query) {
                    $query->where('agency_id', $this->agency);
                })->count(),
                'icon' => 'ri-information-fill fs-20',
                'color' => 'text-dark'
            ],
        ];
    }

    public function statuses(){
        $data = ListStatus::whereIn('id',[1,2,3])
        ->withCount(['tsrs' => function ($query) {
            $query->where('agency_id', $this->agency);
        }])->get();
        return $data;
    }

    public function info1($request){
        $sort = ($request->sort) ? $request->sort : 'desc';
        $year = $request->year;
        $month = $request->month;
        $laboratory = $request->laboratory;

        return [
            [
                'name' => 'Collected Amount (Receipted)',
                'description' => 'Total collected and receipted amount',
                'total' => TsrPayment::whereHas('tsr', function ($query) use ($laboratory,$month,$year){
                    $query->where('agency_id', $this->agency)->where('status_id','!=',5);
                    $query->when($laboratory, function ($query, $laboratory) {
                        $query->where('laboratory_type',$laboratory);
                    });
                    ($year) ? $query->whereYear('created_at',$year) : '';
                    ($month) ? $query->whereMonth('created_at',$month) : '';
                })->where('status_id',7)->where('is_paid',1)->where('is_child',0)->sum('total'),
                'icon' => 'ri-checkbox-circle-fill fs-20',
                'color' => 'text-success'
            ],
            [
                'name' => 'Uncollected Amount',
                'description' => 'Total unpaid pending payments',
                'total' => TsrPayment::whereHas('tsr', function ($query) use ($laboratory,$year,$month){
                    $query->where('agency_id', $this->agency)->where('status_id','!=',5);
                    $query->when($laboratory, function ($query, $laboratory) {
                        $query->where('laboratory_type',$laboratory);
                    });
                    ($year) ? $query->whereYear('created_at',$year) : '';
                    ($month) ? $query->whereMonth('created_at',$month) : '';
                })->whereIn('status_id',[6,18])->where('is_paid',0)->where('is_child',0)->sum('total'),
                'icon' => 'ri-close-circle-fill fs-20',
                'color' => 'text-danger'
            ],
            [
                'name' => 'Total Transaction Value',
                'description' => 'Total value of all transactions',
                'total' => TsrPayment::whereHas('tsr', function ($query) use ($laboratory,$year,$month){
                    $query->where('agency_id', $this->agency)->where('status_id','!=',5);
                    $query->when($laboratory, function ($query, $laboratory) {
                        $query->where('laboratory_type',$laboratory);
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
                'description' => 'Total value of free services',
                'total' => TsrPayment::whereHas('tsr', function ($query) use ($laboratory,$year,$month){
                    $query->where('agency_id', $this->agency)->where('status_id','!=',5);
                    $query->when($laboratory, function ($query, $laboratory) {
                        $query->where('laboratory_type',$laboratory);
                    });
                    ($year) ? $query->whereYear('created_at',$year) : '';
                    ($month) ? $query->whereMonth('created_at',$month) : '';
                })->where('status_id',8)->where('is_free',1)->where('is_child',0)->sum('discount'),
                'icon' => 'ri-hearts-fill fs-20',
                'color' => 'text-warning'
            ],
            [
                'name' => 'Aggregate Collection Value',
                'description' => 'Total of payments and free services',
                'total' => TsrPayment::whereHas('tsr', function ($query) use ($laboratory,$year,$month) {
                    $query->where('agency_id', $this->agency)->where('status_id','!=',5);
                    $query->when($laboratory, function ($query, $laboratory) {
                        $query->where('laboratory_type',$laboratory);
                    });
                    ($year) ? $query->whereYear('created_at',$year) : '';
                    ($month) ? $query->whereMonth('created_at',$month) : '';
                })->whereIn('status_id',[6,7,18])->where('is_child',0)->sum('total') + TsrPayment::whereHas('tsr', function ($query) use ($laboratory,$year,$month){
                    $query->where('agency_id', $this->agency)->where('status_id','!=',5);
                    $query->when($laboratory, function ($query, $laboratory) {
                        $query->where('laboratory_type',$laboratory);
                    });
                    ($year) ? $query->whereYear('created_at',$year) : '';
                    ($month) ? $query->whereMonth('created_at',$month) : '';
                })->where('status_id',8)->where('is_free',1)->where('is_child',0)->sum('discount'),
                'icon' => 'ri-medal-fill fs-20',
                'color' => 'text-info'
            ]
        ];
    }

}
