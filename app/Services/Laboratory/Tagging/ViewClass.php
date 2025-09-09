<?php

namespace App\Services\Laboratory\Tagging;

use Carbon\Carbon;
use App\Models\UserRole;
use App\Models\TsrAnalysis;
use App\Models\TsrSample;
use App\Models\AgencyConfiguration;
use App\Http\Resources\Operation\AnalysisResource;

class ViewClass
{
    public function __construct()
    {
        $this->agency = (\Auth::user()->myroles) ? \Auth::user()->myroles[0]->agency_id : null;
        $this->province = (\Auth::user()->myroles) ? \Auth::user()->myroles[0]->province_code : null;
        $this->configuration = AgencyConfiguration::with('agency.address')->where('agency_id',$this->agency)->first();
        // $data = UserRole::where('user_id',\Auth::user()->id)->pluck('laboratory_id');
        // $filteredData = $data->filter(function ($value) {
        //     return !is_null($value);
        // });
        // $this->laboratory = $filteredData->isNotEmpty() ? $filteredData : null;
        $this->laboratories = UserRole::where('user_id',\Auth::user()->id)->whereIn('role_id',[4,9])->pluck('laboratory_id');
    }

    public function lists($request){
        $pendings = []; $ongoings = []; $completeds = [];
        
        if($request->type == 'Sample Code'){
            return [
                'pendings' => $this->pendings($request),
                'ongoings' => $this->ongoings($request),
                'completeds' => $this->completeds($request),
            ];
        }else{
            return [
                'pendings' => $this->pendings2($request),
                'ongoings' => $this->ongoings2($request),
                'completeds' =>  $this->completeds($request),
            ];
        }
    }

    private function pendings2($request){
        $pendings = TsrAnalysis::query()
            ->with([
                'sample',
                'testservice.testname',
                'testservice.method.reference',
                'testservice.method.method',
                'analyst'
            ])
            ->where('status_id', 10)
            
            // Combined keyword filter
            ->when($request->keyword, function ($query, $keyword) {
                $query->where(function ($q) use ($keyword) {
                    $q->whereHas('testservice.testname', function ($q) use ($keyword) {
                        ($request->type == "Sample Code") ? '' : $q->where('name', 'LIKE', "%{$keyword}%");
                    })->orWhereHas('sample', function ($q) use ($keyword) {
                       ($request->type == "Sample Code") ?  $q->where('code', 'LIKE', "%{$keyword}%") : $q->orWhere('name', 'LIKE', "%{$keyword}%");
                    });
                });
            })

            // Reminder filters
            ->when($request->reminder, function ($query, $reminder) {
                switch ($reminder) {
                    case 'Due Soon':
                        $query->whereIn('status_id', [10, 11]);
                        break;
                    case 'Ongoing Task':
                    case 'Completed':
                        $query->where('analyst_id', \Auth::user()->id);
                        break;
                }
            })

            // Sample and TSR filters
            ->withWhereHas('sample', function ($query) use ($request) {
                $query->withWhereHas('tsr', function ($query) use ($request) {
                    $query->select('id', 'due_at', 'created_at')
                        ->where('agency_id', $this->agency)
                        ->where('status_id', 3)
                        ->when($request->month, function ($query, $month) {
                            $query->whereMonth('due_at', $month);
                        })
                        ->when($request->reminder, function ($query, $reminder) {
                            switch ($reminder) {
                                case 'Completed with no report number':
                                    $query->where('status_id', 4)
                                        ->where('due_at', '<', Carbon::now());
                                    break;
                                case 'Due Soon':
                                    $query->whereBetween('due_at', [
                                        Carbon::now()->startOfDay(),
                                        Carbon::now()->addDays(5)->endOfDay()
                                    ]);
                                    break;
                                case 'Overdue Request':
                                    $query->whereDate('due_at', '<', Carbon::now());
                                    break;
                                case 'Completed':
                                    $query->where('status_id', 4);
                                    break;
                            }
                        });
                    $query->when($request->laboratory, function ($query) use ($request) {
                            $query->whereIn('laboratory_id', (array) $request->laboratory);
                        }, function ($query) {
                            $query->whereIn('laboratory_id', $this->laboratories);
                        });
                    $query->when($this->province, function ($query){
                        $query->whereHas('received.myroles', function ($query) {
                            $query->where('province_code', $this->province);
                        });
                    });
                });
            })
            ->get()
            ->map(function ($analysis) {
                return [
                    'id' => $analysis->id,
                    'tsr_id' => $analysis->sample->tsr_id,
                    'tsr' => $analysis->sample->tsr,
                    'code' => $analysis->sample->code,
                    'name' => $analysis->sample->name,
                    'testservice_name' => $analysis->testservice->testname->name ?? '',
                    'testservice' => $analysis->testservice,
                    'selected' => null
                ];
            });

        return $pendings;
    }

    private function ongoings2($request){
        $ongoings = TsrAnalysis::query()
            ->with([
                'sample',
                'testservice.testname',
                'testservice.method.reference',
                'testservice.method.method',
                'analyst'
            ])
            ->where('status_id', 11)
            
            // Combined keyword filter
            ->when($request->keyword, function ($query, $keyword) {
                $query->where(function ($q) use ($keyword) {
                    $q->whereHas('testservice.testname', function ($q) use ($keyword) {
                        ($request->type == "Sample Code") ? '' : $q->where('name', 'LIKE', "%{$keyword}%");
                    })->orWhereHas('sample', function ($q) use ($keyword) {
                       ($request->type == "Sample Code") ?  $q->where('code', 'LIKE', "%{$keyword}%") : $q->orWhere('name', 'LIKE', "%{$keyword}%");
                    });
                });
            })

            // Reminder filters
            ->when($request->reminder, function ($query, $reminder) {
                switch ($reminder) {
                    case 'Due Soon':
                        $query->whereIn('status_id', [10, 11]);
                        break;
                    case 'Ongoing Task':
                    case 'Completed':
                        $query->where('analyst_id', \Auth::user()->id);
                        break;
                }
            })

            // Sample and TSR filters
            ->withWhereHas('sample', function ($query) use ($request) {
                $query->withWhereHas('tsr', function ($query) use ($request) {
                    $query->select('id', 'due_at', 'created_at')
                    ->where('agency_id', $this->agency)
                    ->where('status_id', 3)
                    ->when($request->month, function ($query, $month) {
                        $query->whereMonth('due_at', $month);
                    })
                    ->when($request->reminder, function ($query, $reminder) {
                        switch ($reminder) {
                            case 'Completed with no report number':
                                $query->where('status_id', 4)->where('due_at', '<', Carbon::now());
                            break;
                            case 'Due Soon':
                                $query->whereBetween('due_at', [
                                    Carbon::now()->startOfDay(),
                                    Carbon::now()->addDays(5)->endOfDay()
                                ]);
                            break;
                            case 'Overdue Request':
                                $query->whereDate('due_at', '<', Carbon::now());
                            break;
                            case 'Completed':
                                $query->where('status_id', 4);
                            break;
                        }
                    });
                    $query->when($request->laboratory, function ($query) use ($request) {
                        $query->whereIn('laboratory_id', (array) $request->laboratory);
                    }, function ($query) {
                        $query->whereIn('laboratory_id', $this->laboratories);
                    });
                    $query->when($this->province, function ($query){
                        $query->whereHas('received.myroles', function ($query) {
                            $query->where('province_code', $this->province);
                        });
                    });
                });
            })
            ->get()
            ->map(function ($analysis) {
                return [
                    'id' => $analysis->id,
                    'tsr_id' => $analysis->sample->tsr_id,
                    'tsr' => $analysis->sample->tsr,
                    'code' => $analysis->sample->code,
                    'name' => $analysis->sample->name,
                    'testservice_name' => $analysis->testservice->testname->name ?? '',
                    'testservice' => $analysis->testservice,
                    'selected' => null
                ];
            });

        return $ongoings;
    }

    private function completeds($request){
        $ongoings = TsrSample::when($request->keyword, function ($query, $keyword) use ($request){
            ($request->type == "Sample Code") ? $query->where('code', 'LIKE', "%{$keyword}%") : $query->orWhere('name','LIKE',"%{$keyword}%");
        })
        ->when($request->reminder, function ($query, $reminder) {
            switch($reminder){
                case 'Overdue Request':
                    $query->where('is_completed',0);
                break;
            }
        })
        ->withWhereHas('tsr',function ($query) use ($request){
            $query->select('id','due_at','created_at');
            $query->where('agency_id',$this->agency)->whereIn('status_id',[3,4]);
            $query->when($request->laboratory, function ($query) use ($request) {
                $query->whereIn('laboratory_id', (array) $request->laboratory);
            }, function ($query) {
                $query->whereIn('laboratory_id', $this->laboratories);
            });
            $query->when($request->reminder, function ($query, $reminder) {
                switch($reminder){
                    case 'Completed with no report number':
                        $query->where('status_id',4)->where('due_at','<',Carbon::now());
                    break;
                    case 'Due Soon':
                        $query->whereBetween('due_at', [Carbon::now()->startOfDay(), Carbon::now()->addDays(5)->endOfDay()]);
                    break;
                    case 'Overdue Request':
                        $query->whereDate('due_at','<',Carbon::now())->whereNotIn('status_id',[4,5]);
                    break;
                    case 'Completed':
                        $query->where('status_id',4);
                    break;
                }
            });
            $query->when($request->month, function ($query, $month) {
                $query->whereMonth('due_at',$month);
            });
            $query->when($this->province, function ($query){
                $query->whereHas('received.myroles', function ($query) {
                    $query->where('province_code', $this->province);
                });
            });
        })->withWhereHas('analyses', function ($query) use ($request){
            $query->with('sample','testservice.testname','testservice.method.reference','testservice.method.method');
            $query->where('status_id',12);
            $query->when($request->reminder, function ($query, $reminder) {
                switch($reminder){
                    case 'Due Soon':
                        $query->whereIn('status_id',[10,11]);
                    break;
                    case 'Ongoing Task':
                        $query->where('analyst_id',\Auth::user()->id);
                    break;
                    case 'Completed':
                        $query->where('analyst_id',\Auth::user()->id);
                    break;
                }
            });
        })
        ->doesntHave('report')
        ->withCount([
            'analyses as analyses_count' => function ($query) {
                $query->where('status_id', '!=', 13);
            },
            'analyses as completed_analyses_count' => function ($query) {
                $query->where('status_id', 12);
            },
            'analyses as ongoing_analyses_count' => function ($query) {
                $query->where('status_id', 11);
            },
            'analyses as pending_analyses_count' => function ($query) {
                $query->where('status_id', 10);
            }
        ])
        ->get()->map(function ($sample) {
            return [
                'id' => $sample->id,
                'tsr_id' => $sample->tsr_id,
                'tsr' => $sample->tsr,
                'code' => $sample->code,
                'name' => $sample->name,
                'analyses' => AnalysisResource::collection($sample->analyses),
                'count' => $sample->analyses_count,
                'pending' => $sample->pending_analyses_count,
                'ongoing' => $sample->ongoing_analyses_count,
                'completed' => $sample->completed_analyses_count
            ];
        });
        return $ongoings;
    }   

    private function ongoings($request){
        $ongoings = TsrSample::when($request->keyword, function ($query, $keyword) use ($request){
            ($request->type == "Sample Code") ? $query->where('code', 'LIKE', "%{$keyword}%") : $query->orWhere('name','LIKE',"%{$keyword}%");
        })->withWhereHas('tsr',function ($query) use ($request){
            $query->select('id','due_at','created_at');
            $query->where('agency_id',$this->agency)->where('status_id',3);
            $query->when($request->laboratory, function ($query) use ($request) {
                $query->whereIn('laboratory_id', (array) $request->laboratory);
            }, function ($query) {
                $query->whereIn('laboratory_id', $this->laboratories);
            });
            $query->when($request->month, function ($query, $month) {
                $query->whereMonth('due_at',$month);
            });
            $query->when($request->reminder, function ($query, $reminder) {
                switch($reminder){
                    case 'Completed with no report number':
                        $query->where('status_id',4)->where('due_at','<',Carbon::now());
                    break;
                    case 'Due Soon':
                        $query->whereBetween('due_at', [Carbon::now()->startOfDay(), Carbon::now()->addDays(5)->endOfDay()]);
                    break;
                    case 'Overdue Request':
                        $query->whereDate('due_at','<',Carbon::now());
                    break;
                    case 'Completed':
                        $query->where('status_id',4);
                    break;
                }
            });
            $query->when($this->province, function ($query){
                $query->whereHas('received.myroles', function ($query) {
                    $query->where('province_code', $this->province);
                });
            });
        })->withWhereHas('analyses', function ($query) use ($request){
            $query->with('sample','testservice.testname','testservice.method.reference','testservice.method.method');
            $query->where('status_id',11);
            $query->when($request->reminder, function ($query, $reminder) {
                switch($reminder){
                    case 'Due Soon':
                        $query->whereIn('status_id',[10,11]);
                    break;
                    case 'Ongoing Task':
                        $query->where('analyst_id',\Auth::user()->id);
                    break;
                    case 'Completed':
                        $query->where('analyst_id',\Auth::user()->id);
                    break;
                }
            });
        })
        ->withCount([
            'analyses as analyses_count' => function ($query) {
                $query->where('status_id', '!=', 13);
            },
            'analyses as completed_analyses_count' => function ($query) {
                $query->where('status_id', 12);
            },
            'analyses as ongoing_analyses_count' => function ($query) {
                $query->where('status_id', 11);
            },
            'analyses as pending_analyses_count' => function ($query) {
                $query->where('status_id', 10);
            }
        ])
        ->get()->map(function ($sample) {
            return [
                'id' => $sample->id,
                'tsr_id' => $sample->tsr_id,
                'tsr' => $sample->tsr,
                'code' => $sample->code,
                'name' => $sample->name,
                'analyses' => AnalysisResource::collection($sample->analyses),
                'count' => $sample->analyses_count,
                'pending' => $sample->pending_analyses_count,
                'ongoing' => $sample->ongoing_analyses_count,
                'completed' => $sample->completed_analyses_count
            ];
        });
        return $ongoings;
    }   

    private function pendings($request){
        $pendings = TsrSample::when($request->keyword, function ($query, $keyword) use ($request){
            ($request->type == "Sample Code") ? $query->where('code', 'LIKE', "%{$keyword}%") : $query->orWhere('name','LIKE',"%{$keyword}%");
        })->withWhereHas('tsr',function ($query) use ($request){
            $query->select('id','due_at','created_at');
            $query->where('agency_id',$this->agency)->where('status_id',3);
            $query->when($request->laboratory, function ($query) use ($request) {
                $query->whereIn('laboratory_id', (array) $request->laboratory);
            }, function ($query) {
                $query->whereIn('laboratory_id', $this->laboratories);
            });
            $query->when($request->month, function ($query, $month) {
                $query->whereMonth('due_at',$month);
            });
            $query->when($request->reminder, function ($query, $reminder) {
                switch($reminder){
                    case 'Completed with no report number':
                        $query->where('status_id',4)->where('due_at','<',Carbon::now());
                    break;
                    case 'Due Soon':
                        $query->whereBetween('due_at', [Carbon::now()->startOfDay(), Carbon::now()->addDays(5)->endOfDay()]);
                    break;
                    case 'Overdue Request':
                        $query->whereDate('due_at','<',Carbon::now());
                    break;
                    case 'Completed':
                        $query->where('status_id',4);
                    break;
                }
            });
            $query->when($this->province, function ($query){
                $query->whereHas('received.myroles', function ($query) {
                    $query->where('province_code', $this->province);
                });
            });
        })->withWhereHas('analyses', function ($query) use ($request){
            $query->with('sample','testservice.testname','testservice.method.reference','testservice.method.method','analyst');
            $query->where('status_id',10);
            $query->when($request->reminder, function ($query, $reminder) {
                switch($reminder){
                    case 'Due Soon':
                        $query->whereIn('status_id',[10,11]);
                    break;
                    case 'Ongoing Task':
                        $query->where('analyst_id',\Auth::user()->id);
                    break;
                    case 'Completed':
                        $query->where('analyst_id',\Auth::user()->id);
                    break;
                }
            });
        })
        ->withCount([
            'analyses as analyses_count' => function ($query) {
                $query->where('status_id', '!=', 13);
            },
            'analyses as completed_analyses_count' => function ($query) {
                $query->where('status_id', 12);
            },
            'analyses as ongoing_analyses_count' => function ($query) {
                $query->where('status_id', 11);
            },
            'analyses as pending_analyses_count' => function ($query) {
                $query->where('status_id', 10);
            }
        ])
        ->get()->map(function ($sample) {
            return [
                'id' => $sample->id,
                'tsr_id' => $sample->tsr_id,
                'tsr' => $sample->tsr,
                'code' => $sample->code,
                'name' => $sample->name,
                'analyses' => AnalysisResource::collection($sample->analyses),
                'count' => $sample->analyses_count,
                'pending' => $sample->pending_analyses_count,
                'ongoing' => $sample->ongoing_analyses_count,
                'completed' => $sample->completed_analyses_count,
                'selected' => null
            ];
        });
        return $pendings;
    }
}
