<?php

namespace App\Services\Insights;

use App\Models\Tsr;
use App\Models\User;
use App\Models\UserRole;
use App\Models\TsrSample;
use App\Models\TsrAnalysis;
use App\Models\TsrPayment;
use App\Models\ListDropdown;
use App\Models\ListLaboratory;
use App\Models\AgencyConfiguration;
use App\Http\Resources\DefaultResource;

class LaboratoryClass
{
    public function __construct()
    {   
        $this->agency = (count(\Auth::user()->myroles) > 0) ? \Auth::user()->myroles[0]->agency_id : null;
        $this->ids =(\Auth::check()) ? (\Auth::user()->role == 'Administrator') ? [] : AgencyConfiguration::where('agency_id',$this->agency)->value('laboratories') : '';
    }

    public function types($request){
        switch($request->type){
            case 'chart':
                return $this->chart($request);
            break;
        }
    }

    public function chart($request){
        $year = $request->year;
        $months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
        $lab_id = ($this->ids) ? array_column($this->ids, 'value') : null;
        $laboratories = ListLaboratory::whereIn('id',$lab_id)->get();
        foreach($laboratories as $list){
            $data = [];
            for($month = 1; $month <= 12; $month++){
                $count = Tsr::where('laboratory_id',$list['id'])->where('agency_id',$this->agency)->whereYear('created_at',$year)->whereMonth('created_at',$month)->count();
                $data[] = $count;
            }
            $arr[] = [
                'name' => $list['name'],
                'data' => $data  
            ];
        }

        return $y =[
            'categories' => $months,
            'lists' => $arr
        ];
    }

    public function info($request){
        $sort = ($request->sort) ? $request->sort : 'desc';
        $year = $request->year;
        $month = $request->month;
        $laboratory = $request->laboratory;

        return [
            [
                'name' => 'Total Completed Tests',
                'description' => 'Total tests that have been finalized',
                'total' => TsrAnalysis::whereHas('sample', function ($query) use ($laboratory,$month,$year){
                    $query->whereHas('tsr', function ($query) use ($laboratory,$month,$year){
                        $query->where('agency_id',$this->agency)->where('status_id','!=',5);
                        $query->when($laboratory, function ($query, $laboratory) {
                            $query->where('laboratory_id',$laboratory);
                        });
                        ($year) ? $query->whereYear('created_at',$year) : '';
                        ($month) ? $query->whereMonth('created_at',$month) : '';
                    });
                })
                ->where('status_id',12)->count(),
                'icon' => 'ri-checkbox-circle-fill fs-20',
                'color' => 'text-success'
            ],
            [
                'name' => 'Total Ongoing Tests',
                'description' => 'Tests that are currently in progress',
                'total' => TsrAnalysis::whereHas('sample', function ($query) use ($laboratory,$month,$year){
                    $query->whereHas('tsr', function ($query) use ($laboratory,$month,$year){
                        $query->where('agency_id',$this->agency)->where('status_id','!=',5);
                        $query->when($laboratory, function ($query, $laboratory) {
                            $query->where('laboratory_id',$laboratory);
                        });
                        ($year) ? $query->whereYear('created_at',$year) : '';
                        ($month) ? $query->whereMonth('created_at',$month) : '';
                    });
                })
                ->where('status_id',11)->count(),
                'icon' => 'ri-indeterminate-circle-fill fs-20',
                'color' => 'text-warning'
            ],
            [
                'name' => 'Total Tests Conducted',
                'description' => ' The overall count of tests conducted',
                'total' => TsrAnalysis::whereHas('sample', function ($query) use ($laboratory,$month,$year){
                    $query->whereHas('tsr', function ($query) use ($laboratory,$month,$year){
                        $query->where('agency_id',$this->agency)->where('status_id','!=',5);
                        $query->when($laboratory, function ($query, $laboratory) {
                            $query->where('laboratory_id',$laboratory);
                        });
                        ($year) ? $query->whereYear('created_at',$year) : '';
                        ($month) ? $query->whereMonth('created_at',$month) : '';
                    });
                })
                ->whereIn('status_id',[11,12])->count(),
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
                'name' => 'Number of Laboratory Analysts',
                'description' => 'Total number of analysts working in the laboratory.',
                'total' => UserRole::whereHas('user', function ($query) use ($laboratory){
                    $query->where('is_active',1);
                })
                ->where('agency_id',$this->agency)->where('role_id',4)
                ->when($laboratory, function ($query, $laboratory) {
                    $query->where('laboratory_id',$laboratory);
                })->count(),
                'icon' => 'ri-team-fill fs-20',
                'color' => 'text-dark'
            ],
            [
                'name' => 'Number of Laboratories',
                'description' => 'Total number of laboratories available in the region.',
                'total' => count($this->ids),
                'icon' => 'ri-community-fill fs-20',
                'color' => 'text-info'
            ]
        ];
    }

    public function tsrs($request){
        // $ids = Configuration::where('laboratory_id',$this->laboratory)->value('laboratories');
        // dd($ids);
        // dd($this->ids);
        $lab_id = ($this->ids) ? array_column($this->ids, 'value') : null;
        $sort = ($request->sort) ? $request->sort : 'desc';
        $year = $request->year;
        $month = $request->month;

        $query = ListLaboratory::query()->select('id','name');
        $query->whereIn('id',$lab_id);
        $query->withCount(['tsrs' => function ($query) use ($year,$month){
            $query->whereIn('status_id', [3,4])->where('agency_id',$this->agency);
            ($year) ? $query->whereYear('created_at',$year) : '';
            ($month) ? $query->whereMonth('created_at',$month) : '';
        }])
        ->orderBy('tsrs_count', $sort);
        $data = $query->get();
        return DefaultResource::collection($data);
    }

    public function earnings($request){
        $lab_id = ($this->ids) ? array_column($this->ids, 'value') : null;
        $sort = ($request->sort) ? $request->sort : 'desc';
        $year = $request->year;
        $month = $request->month;

        $query = ListLaboratory::query()->whereIn('list_laboratories.id',$lab_id);
        $query->select('list_laboratories.id','list_laboratories.name',\DB::raw('SUM(tsr_payments.total) as total'))
        ->join('tsrs', 'list_laboratories.id', '=', 'tsrs.laboratory_id')
        ->join('tsr_payments', 'tsrs.id', '=', 'tsr_payments.tsr_id')
        ->whereIn('tsrs.status_id',[1,2,3,4])
        ->where('tsrs.agency_id',$this->agency)
        ->where('tsr_payments.is_child',0)
        ->groupBy('list_laboratories.id', 'list_laboratories.name')
        ->orderBy('total',$sort);
        ($year) ? $query->whereYear('tsr_payments.paid_at', $year) : '';
        ($month) ? $query->whereMonth('tsr_payments.paid_at', $month) : '';
        $data = $query->get();
        return DefaultResource::collection($data);
    }

    public function gratis($request){
        $lab_id = ($this->ids) ? array_column($this->ids, 'value') : null;
        $sort = ($request->sort) ? $request->sort : 'desc';
        $year = $request->year;
        $month = $request->month;

        $query = ListLaboratory::query()->whereIn('list_laboratories.id',$lab_id);
        $query->select('list_laboratories.id','list_laboratories.name',\DB::raw('SUM(tsr_payments.subtotal) as total'))
        ->join('tsrs', 'list_laboratories.id', '=', 'tsrs.laboratory_id')
        ->join('tsr_payments', 'tsrs.id', '=', 'tsr_payments.tsr_id')
        ->whereIn('tsrs.status_id',[1,2,3,4])
        ->where('tsr_payments.status_id', 8)  // Add the condition for status_id = 8
        ->where('tsr_payments.is_free', 1)  
        ->where('tsrs.agency_id',$this->agency);
        ($month) ? $query->whereMonth('tsrs.created_at',$month) : '';
        ($year) ? $query->whereYear('tsrs.created_at',$year) : '';
        $query->groupBy('list_laboratories.id', 'list_laboratories.name');
        $query->orderBy('total',$sort);
       
        $data = $query->get();
        return DefaultResource::collection($data);
    }

    public function discounts($request){
        $lab_id = ($this->ids) ? array_column($this->ids, 'value') : null;
        $sort = ($request->sort) ? $request->sort : 'desc';
        $year = $request->year;
        $month = $request->month;

        $query = ListLaboratory::query()->whereIn('list_laboratories.id',$lab_id);
        $query->select('list_laboratories.id','list_laboratories.name',\DB::raw('SUM(tsr_payments.discount) as total'))
        ->join('tsrs', 'list_laboratories.id', '=', 'tsrs.laboratory_id')
        ->join('tsr_payments', 'tsrs.id', '=', 'tsr_payments.tsr_id')
        ->whereIn('tsrs.status_id',[1,2,3,4])
        ->where('tsr_payments.status_id', 7)
        ->where('tsr_payments.discount_id', [2,3,4,8])  // Add the condition for status_id = 8
        ->where('tsr_payments.is_paid', 1)  
        ->where('tsrs.agency_id',$this->agency);
        ($month) ? $query->whereMonth('tsrs.created_at',$month) : '';
        ($year) ? $query->whereYear('tsrs.created_at',$year) : '';
        $query->groupBy('list_laboratories.id', 'list_laboratories.name');
        $query->orderBy('total',$sort);
       
        $data = $query->get();
        return DefaultResource::collection($data);
    }

    public function samples($request){
        $lab_id = ($this->ids) ? array_column($this->ids, 'value') : null;
        $sort = ($request->sort) ? $request->sort : 'desc';
        $year = $request->year;
        $month = $request->month;

        foreach($lab_id as $id){
            $lab = ListLaboratory::where('id',$id)->first();
            $count = TsrSample::whereHas('tsr',function ($query) use ($year,$month,$id) {
                $query->where('agency_id',$this->agency);
                $query->where('laboratory_id',$id);
                $query->whereIn('status_id',[3,4]);
                ($month) ? $query->whereMonth('created_at',$month) : '';
                ($year) ? $query->whereYear('created_at',$year) : '';
            })->count();
            $data[] = [
                'name' => $lab['name'],
                'count' => $count
            ];
        }
        usort($data, function($a, $b) {
            return $b['count'] <=> $a['count'];
        });
        
        return $data;
    }

    public function analyses($request){
        $lab_id = ($this->ids) ? array_column($this->ids, 'value') : null;
        $sort = ($request->sort) ? $request->sort : 'desc';
        $year = $request->year;
        $month = $request->month;

        foreach($lab_id as $id){
            $lab = ListLaboratory::where('id',$id)->first();
            $count = TsrAnalysis::whereHas('sample', function ($query) use ($year,$month,$id) {
                $query->whereHas('tsr', function ($query) use ($year,$month,$id){
                    $query->where('agency_id',$this->agency);
                    $query->where('laboratory_id',$id);
                    $query->whereIn('status_id',[1,2,3,4]);
                    ($month) ? $query->whereMonth('created_at',$month) : '';
                    ($year) ? $query->whereYear('created_at',$year) : '';
                });
            })
           ->count();

            $data[] = [
                'name' => $lab['name'],
                'count' => $count
            ];
        }
        usort($data, function($a, $b) {
            return $b['count'] <=> $a['count'];
        });
        
        return $data;
    }
}
