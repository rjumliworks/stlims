<?php

namespace App\Services\Others\Personnel;

use App\Models\User;
use App\Models\UserRole;
use App\Models\TsrAnalysis;
use App\Models\ListLaboratory;
use App\Models\AgencyFacilityLaboratory;

class ViewClass
{   
    public function __construct()
    {
        $this->agency = (\Auth::check()) ? (count(\Auth::user()->myroles) > 0) ? \Auth::user()->myroles[0]->agency_id : null : '';
        $this->laboratories = UserRole::where('user_id',\Auth::user()->id)->where('role_id',2)->where('is_active',1)->pluck('laboratory_id');
    }

    public function laboratories(){
        $query = ListLaboratory::query();
        ($this->laboratories) ? $query->whereIn('id',$this->laboratories) : '';
        $data = $query->get()->map(function ($item) {
            $facilities = AgencyFacilityLaboratory::withWhereHas('facility', function ($query)  {
                $query->where('agency_id', $this->agency);
            })
            ->where('laboratory_id', $item->id)
            ->get()->map(function ($item1) {
                return [
                    'value' => $item1->facility->id,
                    'name' => $item1->facility->name
                ];
            });
            return [
                'value' => $item->id,
                'name' => $item->name,
                'short' => $item->short,
                'facilities' => $facilities,
            ];
        });
        return $data;
    }

    public function lists($request){
        $laboratory = ($request->laboratory) ? $request->laboratory : $this->laboratories;
        $users = UserRole::with('user.profile','laboratory')
            ->where('agency_id', $this->agency)
            // ->whereIn('laboratory_id', $laboratory)
            ->whereIn('role_id', [4, 9])
            // ->whereHas('myroles', function ($query) {
            //     $query->where('agency_id', $this->agency)
            //         ->where('laboratory_id', $this->roles)
            //         ->whereIn('role_id', [4, 9]);
            // })
            ->get();

        $usersWithCounts = $users->map(function ($user) {
            $ongoingTest = TsrAnalysis::where('status_id', 11)
            ->where('analyst_id', $user->user_id)
            ->whereHas('sample', function($q) use ($user) {
                $q->whereHas('tsr', function($q2) use ($user) {
                    $q2->where('laboratory_id', $user->laboratory_id);
                });
            })
            ->whereYear('start_at', now())->count();

            $testsPerformed = TsrAnalysis::where('status_id', 12)
                ->where('analyst_id', $user->user_id)
                ->whereHas('sample', function($q) use ($user) {
                    $q->whereHas('tsr', function($q2) use ($user) {
                        $q2->where('laboratory_id', $user->laboratory_id); // fixed typo
                    });
                })
                ->whereYear('start_at', now())->count();

            $totalCost = TsrAnalysis::where('status_id', 12)
                ->where('analyst_id', $user->user_id)
                ->whereHas('sample', function($q) use ($user) {
                    $q->whereHas('tsr', function($q2) use ($user) {
                        $q2->where('laboratory_id', $user->laboratory_id); // added filter
                    });
                })->whereYear('start_at', now())->sum('fee');

            return [
                'id' => $user->user_id,
                'name' => $user->user->profile->firstname.' '.$user->user->profile->middlename[0].'. '. $user->user->profile->lastname,
                'laboratory' => $user->laboratory,
                'is_active' => $user->is_active,
                'ongoing_test' => $ongoingTest,
                'tests_performed' => $testsPerformed,
                'total_cost' => $totalCost,
            ];
        });

        return $usersWithCounts;
    }
}
