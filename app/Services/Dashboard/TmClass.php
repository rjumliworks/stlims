<?php

namespace App\Services\Dashboard;

use Carbon\Carbon;
use App\Models\Tsr;
use App\Models\TsrRelease;
use App\Models\TsrSample;
use App\Models\TsrAnalysis;
use App\Models\TsrPayment;
use App\Models\TsrPaymentDeduction;
use App\Models\UserRole;
use App\Models\ListStatus;
use App\Models\ListLaboratory;

class TmClass
{
    public function __construct()
    {
        $this->agency = (\Auth::check()) ? (count(\Auth::user()->myroles) > 0) ? \Auth::user()->myroles[0]->agency_id : null : '';
        $this->start = now()->copy()->startOfMonth()->format('Y-m-d');
        $this->end = now()->copy()->endOfMonth()->format('Y-m-d');
        $this->roles = UserRole::where('user_id',\Auth::user()->id)->pluck('laboratory_id');
    }

    public function info($request){
        return [
            'month' => date('F'),
            'date' => $this->start.' to '.$this->end,
            'labs' => ListLaboratory::whereIn('id',$this->roles)->get()->map(function ($item) {
                return [
                    'value' => $item->id,
                    'name' => $item->name
                ];
            })
        ];
    }

    public function counts($request){
        return [
            $this->fees($request),
            $this->tsrs($request),
            $this->samples($request),
            $this->testservices($request),
        ];
    }

    private function tsrs($request){
        foreach($this->roles as $role){
            $series = [];
            $data = Tsr::select(\DB::raw('DATE(created_at) AS x'), \DB::raw('count(*) AS y'))
            ->where('agency_id', $this->agency)
            ->whereIn('status_id',[1,2,3,4]) //status is completed
            ->where('laboratory_id',$role)
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
            $lab[] = [
                'id' => $role,
                'total' => Tsr::whereBetween('created_at',[$this->start,$this->end])->whereIn('status_id',[1,2,3,4])->where('laboratory_id',$role)->where('agency_id',$this->agency)->count()
            ];
            $info = [
                'id' => $role,
                'series' => $series,
                'laboratory' => $lab
            ];
        }

        return $arr = [
            'name' => 'Customer Served',
            'icon' => 'ri-hand-coin-fill',
            'color' => '',
            'info' => $info
        ];
            
    }

    private function samples($request){
        foreach($this->roles as $role){
            $series = [];
            $data = TsrSample::select(\DB::raw('DATE(created_at) AS x'), \DB::raw('count(*) AS y'))
            ->whereHas('tsr', function ($query) use ($role){
                $query->where('agency_id',$this->agency)->where('laboratory_id',$role)->whereIn('status_id',[1,2,3,4]);
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
            $lab[] = [
                'id' => $role,
                'total' => TsrSample::whereBetween('created_at',[$this->start,$this->end])->whereHas('tsr', function ($query) use ($role){
                    $query->where('agency_id',$this->agency)->where('laboratory_id',$role)->whereIn('status_id',[1,2,3,4]);
                })->count()
            ];
            $info = [
                'id' => $role,
                'series' => $series,
                'laboratory' => $lab
            ];
        }

        return $arr = [
            'name' => 'Samples Received',
            'icon' => 'ri-inbox-archive-fill',
            'color' => '',
            'info' => $info
        ];
    }

    private function testservices($request){
        foreach($this->roles as $role){
            $series = [];
            $data = TsrAnalysis::select(\DB::raw('DATE(created_at) AS x'), \DB::raw('count(*) AS y'))
            ->whereHas('sample', function ($query) use ($role){
                $query->whereHas('tsr', function ($query) use ($role){
                    $query->where('agency_id',$this->agency)->where('laboratory_id',$role)->whereIn('status_id',[1,2,3,4]);
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
            $lab[] = [
                'id' => $role,
                'total' => TsrAnalysis::whereBetween('created_at',[$this->start,$this->end])->whereHas('sample', function ($query) use ($role){
                    $query->whereHas('tsr', function ($query) use ($role){
                        $query->where('agency_id',$this->agency)->where('laboratory_id',$role)->whereIn('status_id',[1,2,3,4]);
                    });
                })
               ->count()
            ];
            $info = [
                'id' => $role,
                'series' => $series,
                'laboratory' => $lab
            ];
        }
        return $arr = [
            'name' => 'Services Conducted',
            'icon' => 'ri-flask-fill',
            'color' => '',
            'info' => $info
        ];
    }

    private function fees($request){
        $month = ($request->month) ? \DateTime::createFromFormat('F', $request->month)->format('m') : date('m');  
        $year = ($request->year) ? $request->year : date('Y');
        $totals = [];
        foreach($this->roles as $role){
            $wallet = TsrPaymentDeduction::whereMonth('created_at',$month)->whereYear('created_at',$year)
            ->whereHas('payment', function ($query) use ($role){
                $query->whereHas('tsr', function ($query) use ($role){
                    $query->where('agency_id',$this->agency)->where('laboratory_id',$role);
                });
            })->sum('amount');

            $contract = TsrPayment::where('status_id',18)->whereHas('tsr', function ($query) use ($month,$year,$role){
                $query->whereMonth('created_at',$month)->whereYear('created_at',$year)->where('agency_id',$this->agency)->where('laboratory_id',$role);
            })->sum('total');

            $pending = TsrPayment::where('status_id',6)->whereHas('tsr', function ($query) use ($month,$year,$role){
                $query->whereMonth('created_at',$month)->whereYear('created_at',$year)->where('agency_id',$this->agency)->where('laboratory_id',$role);
            })->sum('total');

            $gratis = TsrPayment::whereMonth('paid_at',$month)->whereYear('paid_at',$year)->where('is_free',1)
            ->whereHas('tsr', function ($query) use ($role){
                $query->where('agency_id',$this->agency)->where('laboratory_id',$role);
            })->sum('discount');

            $discount = TsrPayment::whereMonth('paid_at',$month)->whereYear('paid_at',$year)->where('is_free',0)
            ->whereHas('tsr', function ($query) use ($role){
                $query->where('agency_id',$this->agency)->where('laboratory_id',$role);
            })->sum('discount');

            $total = TsrPayment::where('is_child',0)->where('paid_at','!=',NULL)->whereHas('tsr', function ($query) use ($month,$year,$role){
                $query->where('agency_id',$this->agency)->where('laboratory_id',$role)->whereMonth('created_at',$month)->whereYear('created_at',$year)->where('status_id','!=',5);
            })->sum('total');

            $totals[] = [
                'id' => $role,
                'total' => $total+$pending+$contract+$wallet+$gratis+$discount
            ];
        }

        return $arr = [
            'name' => 'Actual Fees Collected',
            'icon' => 'ri-bank-card-fill',
            'color' => 'bg-info-subtle',
            'total' => $totals
        ];
    }

    public function reminders($request){
        foreach($this->roles as $role){
            $due[] = [
                'id' => $role,
                'count' => Tsr::whereBetween('due_at', [Carbon::now()->startOfDay(), Carbon::now()->addDays(5)->endOfDay()])->where('agency_id',$this->agency)->where('laboratory_id',$role)->where('status_id','!=',4)->count()
            ];

            $overdue[] = [
                'id' => $role,
                'count' => Tsr::whereDate('due_at','<',now())->where('agency_id',$this->agency)->where('laboratory_id',$role)->whereNotIn('status_id',[4,5])->count()
            ];

            $release[] = [
                'id' => $role,
                'count' => TsrRelease::where('status_id',26)->whereHas('tsr', function ($query) use ($role){
                    $query->where('agency_id',$this->agency)->where('laboratory_id',$role);
                })
                ->where('created_at','>=', Carbon::now()->subDays(30))
                ->count()
            ];

            $unclaimed[] = [
                'id' => $role,
                'count' => TsrRelease::where('status_id',26)->whereHas('tsr', function ($query) use ($role){
                    $query->where('agency_id',$this->agency)->where('laboratory_id',$role);
                })
                ->where('created_at','<=', Carbon::now()->subDays(30))
                ->count()
            ];

            $report[] = [
                'id' => $role,
                'count' => 
                Tsr::whereHas('samples',function ($query) use ($role) {
                    $query->whereDoesntHave('report')->whereHas('analyses', function ($query) {
                        $query->where('status_id', 12);
                    });
                })
                ->where('status_id',4)->where('agency_id',$this->agency)->where('laboratory_id',$role)
                ->count()
            ];
        }
        return [
            [
                'name' => 'Due Soon',
                'description' => '5 days ahead of the due date',
                'info' => $due,
                'icon' => 'ri-error-warning-line',
                'color' => 'bg-warning-subtle text-warning'
            ],
            [
                'name' => 'Overdue Request',
                'description' => 'Keep track of all laboratory tasks',
                'info' => $overdue,
                'icon' => 'ri-error-warning-fill',
                'color' => 'bg-danger-subtle text-danger'
            ],
            [
                'name' => 'Report Pending',
                'description' => 'Requests awaiting a report number',
                'info' => $report,
                'icon' => 'ri-file-edit-fill',
                'color' => 'bg-info-subtle text-info'
            ],
            [
                'name' => 'For Release',
                'description' => 'Reports ready for release',
                'info' => $release,
                'icon' => 'ri-alert-fill',
                'color' => 'bg-success-subtle text-success'
            ],
            [
                'name' => 'Unclaimed Reports',
                'description' => 'Reports unclaimed for more than 30 days',
                'info' => $unclaimed,
                'icon' => 'ri-information-fill',
                'color' => 'bg-dark-subtle text-dark'
            ],
        ];
    }

    public function statuses(){
       
        $statuses = ListStatus::whereIn('id',[1,2,3])->get();
        foreach($statuses as $status){
            $info = [];
            foreach($this->roles as $role){
                $info[] = [
                    'id' => $role,
                    'count' => Tsr::where('status_id',$status['id'])->where('agency_id',$this->agency)->where('laboratory_id',$role)->count()
                ];
            }
            $data[] = [
                'id' => $status['id'],
                'name' => $status['name'],
                'info' => $info
            ];
        }
        return $data;
    }
}
