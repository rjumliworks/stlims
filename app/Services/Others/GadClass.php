<?php

namespace App\Services\Others;

use App\Models\UserProfile;

class GadClass
{
    public function gender(){
        return UserProfile::select(\DB::raw('count(*) as total'))
        ->whereHas('user', function ($query) {
            $query->where('is_active',1);
        })
        ->whereIn('sex',['Male','Female'])->groupBy('sex')->get();
    }
}
