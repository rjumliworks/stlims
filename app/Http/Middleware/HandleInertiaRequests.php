<?php

namespace App\Http\Middleware;

use App\Models\User;
use App\Models\AgencyConfiguration;
use Illuminate\Http\Request;
use Inertia\Middleware;
use App\Http\Resources\UserResource;

class HandleInertiaRequests extends Middleware
{
    protected $rootView = 'app';

    public function version(Request $request): string|null
    {
        return parent::version($request);
    }

    public function share(Request $request): array
    {   
        if(\Auth::check()){
            if (\Auth::user()->role == 'Administrator'){
                $roles = ['Administrator'];
                $show = false;
            }else{
                $roles = \Auth::user()->roles->pluck('name');
                $show = AgencyConfiguration::where('agency_id',\Auth::user()->myroles->value('agency_id'))->value('show_others');
            }
        }else{
            $roles = '';
            $show = false;
        }

        return [
            ...parent::share($request),
            'user' => (\Auth::check()) ? new UserResource(User::with('profile')->where('id',\Auth::user()->id)->first()) : '',
            'roles' => $roles,
            'show' => $show,
            'flash' => [
                'data' => session('data'),
                'message' => session('message'),
                'info' => session('info'),
                'status' => session('status'),
                'type' => session('type')
            ]
        ];
    }
}