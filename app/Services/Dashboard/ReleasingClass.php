<?php

namespace App\Services\Dashboard;

use Carbon\Carbon;
use App\Models\Tsr;
use App\Models\TsrRelease;

class ReleasingClass
{
    public function __construct()
    {
        $this->agency = (\Auth::check()) ? (count(\Auth::user()->myroles) > 0) ? \Auth::user()->myroles[0]->agency_id : null : '';
    }

    public function lists($request){
        // $laboratory = \Auth::user()->myrole->laboratory_type;
        return [
            [
                'name' => 'Unreleased TSRs',
                'description' => 'TSRs awaiting final release to customers',
                'count' => TsrRelease::whereHas('tsr', function ($query){
                    $query->where('agency_id',$this->agency);
                })->where('status_id',26)->count(),
                'icon' => 'ri-checkbox-circle-fill fs-20',
                'color' => 'text-warning'
            ],
            [
                'name' => 'Released TSRs',
                'description' => 'TSRs successfully released to customers',
                'count' => TsrRelease::whereHas('tsr', function ($query){
                    $query->where('agency_id',$this->agency);
                })->where('status_id',27)->count(),
                'icon' => 'ri-checkbox-circle-fill fs-20',
                'color' => 'text-success'
            ],
            [
                'name' => 'Completed TSRs',
                'description' => 'The total completed TSRs in the system',
                'count' => Tsr::whereNotIn('status_id',[4])->where('agency_id',$this->agency)->count(),
                'icon' => 'ri-information-fill fs-20',
                'color' => 'text-info'
            ]
        ];
    }

    public function age($request){
        // $laboratory = \Auth::user()->myrole->laboratory_type;
        $today = Carbon::now();
        return [
            [
                'name' => '1 Week: Recently Ready',
                'description' => 'Ready within the past week',
                'count' => TsrRelease::whereHas('tsr', function ($query){
                    $query->where('agency_id',$this->agency);
                })->whereBetween('created_at', [Carbon::now()->subDays(7),Carbon::now()])->where('status_id',26)->count(),
                'icon' => 'ri-calendar-todo-fill fs-20',
                'color' => 'text-info'
            ],
            [
                'name' => '2 Weeks: Pending Release',
                'description' => 'Ready for up to two weeks, pending action',
                'count' => TsrRelease::whereHas('tsr', function ($query){
                    $query->where('agency_id',$this->agency);
                })->whereBetween('created_at', [Carbon::now()->subDays(22),Carbon::now()->subDays(8)])->where('status_id',26)->count(),
                'icon' => 'ri-calendar-todo-fill fs-20',
                'color' => 'text-warning'
            ],
            [
                'name' => 'A Month: Overdue for Release',
                'description' => 'Ready for over a month, requires urgent action',
                'count' => TsrRelease::whereHas('tsr', function ($query){
                    $query->where('agency_id',$this->agency);
                })->where('created_at', '<=', Carbon::now()->subDays(22))->where('status_id',26)->count(),
                'icon' => 'ri-calendar-todo-fill fs-20',
                'color' => 'text-danger'
            ]
        ];
    }

    public function counts($request){
        return [
            $this->total($request),
            $this->tsrs($request),
            $this->released($request),
            $this->forrelease($request),
        ];
    }

    private function total(){
        return $arr = [
            'name' => 'Actual Fees Collected',
            'icon' => 'ri-bank-card-fill',
            'color' => 'bg-info-subtle',
            'total' => 0
        ];
    }

    private function tsrs(){
        return $arr = [
            'name' => 'Total TSR\'s',
            'icon' => 'ri-hand-coin-fill',
            'color' => '',
            'total' => Tsr::whereNotIn('status_id',[1,2,5])->where('agency_id',$this->agency)
            ->count()
        ];
    }

    private function released(){
        return $arr = [
            'name' => 'Released TSR\'s',
            'icon' => 'ri-checkbox-circle-fill',
            'color' => '',
            'total' => TsrRelease::whereHas('tsr', function ($query){
                $query->where('agency_id',$this->agency);
            })->where('status_id',27)->count()
        ];
    }

    private function forrelease(){
        return $arr = [
            'name' => 'Pending TSR\'s',
            'icon' => 'ri-close-circle-fill',
            'color' => '',
            'total' => TsrRelease::whereHas('tsr', function ($query){
                $query->where('agency_id',$this->agency);
            })->where('status_id',26)->count()
        ];
    }

}
