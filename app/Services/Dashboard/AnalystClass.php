<?php

namespace App\Services\Dashboard;

use Carbon\Carbon;
use App\Models\TsrSample;
use App\Models\TsrAnalysis;

class AnalystClass
{
    public function __construct()
    {
        $this->agency = (\Auth::check()) ? (count(\Auth::user()->myroles) > 0) ? \Auth::user()->myroles[0]->agency_id : null : '';
    }

    public function lists($request){
        // $laboratory = \Auth::user()->myroles[0]->laboratory_id;
        return [
            [
                'name' => 'Ongoing Test',
                'description' => 'Tests conducted by the analyst',
                'count' => TsrAnalysis::where('status_id',11)->where('analyst_id',\Auth::user()->id)->count(),
                'icon' => 'ri-checkbox-circle-fill fs-20',
                'color' => 'text-warning'
            ],
            [
                'name' => 'Tests Performed',
                'description' => 'Tests conducted by the analyst',
                'count' => TsrAnalysis::where('status_id',12)->where('analyst_id',\Auth::user()->id)->count(),
                'icon' => 'ri-checkbox-circle-fill fs-20',
                'color' => 'text-success'
            ],
            [
                'name' => 'Total Test Cost',
                'description' => 'Cost of all tests performed by the analyst',
                'count' => '₱' . number_format(TsrAnalysis::where('status_id',12)->where('analyst_id',\Auth::user()->id)->sum('fee'),2),
                'icon' => 'ri-information-fill fs-20',
                'color' => 'text-info'
            ]
        ];
    }

    public function tasks($request){
        // $laboratory = \Auth::user()->myrole->laboratory_type;
        return [
            [
                'name' => 'Completed',
                'description' => 'Task I\'ve successfully completed',
                'count' => TsrAnalysis::where('status_id',12)->where('analyst_id',\Auth::user()->id)->count(),
                'icon' => 'ri-checkbox-circle-fill',
                'color' => 'bg-success-subtle text-success'
            ],
            [
                'name' => 'Ongoing Task',
                'description' => 'Task I\'ve handled for completion',
                'count' => TsrAnalysis::where('status_id',11)->where('analyst_id',\Auth::user()->id)->count(),
                'icon' => 'ri-error-warning-fill',
                'color' => 'bg-info-subtle text-info'
            ]
        ];
    }

    public function reminders($request){
        $laboratory = \Auth::user()->myroles[0]->laboratory_id;
        return [ 
            [
                'name' => 'Due Soon',
                'description' => '5 days ahead of the due date',
                'count' => 
                TsrSample::whereHas('tsr',function ($query) use ($laboratory) {
                    $query->whereBetween('due_at', [Carbon::now()->startOfDay(), Carbon::now()->addDays(5)->endOfDay()])->where('agency_id',$this->agency)->where('status_id',3)->where('laboratory_id',$laboratory);
                })
                ->whereHas('analyses', function ($query){
                    $query->whereIn('status_id',[10,11]);
                })
                ->count(),
                'icon' => 'ri-time-fill fs-20',
                'color' => 'text-warning'
            ],
            [
                'name' => 'Overdue Request',
                'description' => 'Keep track of all laboratory tasks',
                'count' => TsrSample::where('is_completed',0)
                ->whereHas('tsr',function ($query) use ($laboratory) {
                    $query->whereDate('due_at','<',Carbon::now())->where('agency_id',$this->agency)->where('laboratory_id',$laboratory)->whereNotIn('status_id',[4,5]);
                })->count(),
                'icon' => 'ri-error-warning-fill fs-20',
                'color' => 'text-danger'
            ],
              [
                'name' => 'Completed with no report number',
                'description' => 'Please generate a report number.',
                'count' => TsrSample::whereHas('tsr',function ($query) use ($laboratory) {
                    $query->where('status_id',4)->where('due_at','<',Carbon::now())->where('agency_id',$this->agency)->where('laboratory_id',$laboratory);
                })
                ->whereDoesntHave('report')
                ->whereHas('analyses', function ($query) {
                    $query->where('status_id', 12);
                })->count(),
                'icon' => 'ri-alert-fill fs-20',
                'color' => 'text-success'
            ]
        ];
    }
}
