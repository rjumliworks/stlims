<?php

namespace App\Services\Dashboard;

use Carbon\Carbon;
use App\Models\TsrSample;
use App\Models\TsrSampleDisposal;
use App\Models\ListDropdown;

class AideClass
{
    public function __construct()
    {
        $this->laboratory = (\Auth::check()) ? (\Auth::user()->myrole) ? \Auth::user()->myrole->laboratory_id : null : '';
        $this->start = now()->copy()->startOfMonth()->format('Y-m-d');
        $this->end = now()->copy()->endOfMonth()->format('Y-m-d');
    }

    public function reminders($request){
        $thirtyDaysAgo = Carbon::now()->subDays(30);
        return [
            [
                'name' => 'Ready for Disposal',
                'description' => 'Samples completed 30 days ago',
                'count' => TsrSample::where('is_completed', 1)
                ->whereHas('analyses', function ($query) use ($thirtyDaysAgo) {
                    $query->where('end_at', '<=', $thirtyDaysAgo)
                          ->orderBy('end_at', 'desc');
                })
                ->count(),
                'icon' => 'ri-error-warning-fill fs-20',
                'color' => 'text-danger'
            ],
            [
                'name' => 'Samples Completed',
                'description' => 'Samples that have not been disposed of',
                'count' => TsrSample::whereHas('tsr',function ($query){
                    $query->where('laboratory_id',$this->laboratory);
                })->where('is_completed',1)->where('is_disposed',0)->count(),
                'icon' => 'ri-error-warning-line fs-20',
                'color' => 'text-warning'
            ],
            [
                'name' => 'Samples Disposed',
                'description' => 'The samples have been disposed',
                'count' => TsrSampleDisposal::where('status_id',29)->whereHas('sample',function ($query){
                    $query->whereHas('tsr',function ($query){
                        $query->where('laboratory_id',$this->laboratory);
                    });
                })->count(),
                'icon' => 'ri-checkbox-circle-fill fs-20',
                'color' => 'text-success'
            ],
        ];
    }

    public function statuses($request){
        $thirtyDaysAgo = Carbon::now()->subDays(30);
        return [
            [
                'name' => 'Pending',
                'description' => 'Samples that are ready for disposal',
                'count' => TsrSampleDisposal::where('status_id', 28)->count(),
                'icon' => 'ri-error-warning-fill fs-20',
                'color' => 'text-warning'
            ],
            [
                'name' => 'Completed',
                'description' => 'Samples that are disposed',
                'count' => TsrSampleDisposal::whereYear('created_at',now())->where('status_id', 29)->count(),
                'icon' => 'ri-checkbox-circle-fill fs-20',
                'color' => 'text-success'
            ],
        ];
    }
}
