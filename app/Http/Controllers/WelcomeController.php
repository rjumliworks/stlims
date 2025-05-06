<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Traits\HandlesTransaction;
use Illuminate\Support\Facades\Http;
use App\Services\DropdownClass;

class WelcomeController extends Controller
{
    use HandlesTransaction;

    public function __construct(DropdownClass $dropdown){
        $this->dropdown = $dropdown;
    }

    public function landing(){
        if(!\Auth::check()){
            return inertia('Auth/Login',[
                'dropdowns' => [
                    'laboratories' => $this->dropdown->laboratories(),
                    'types' => $this->dropdown->laboratory_all(),
                    'roles' => $this->dropdown->roles(),
                ]
            ]);
        }else{
            return inertia('Modules/Laboratory/Dashboard/Index',[
                'laboratories' => $this->dropdown->laboratory_types(),
            ]);
        }
    }

    public function index(){
        if(\Auth::check()){
            return inertia('Modules/Laboratory/Dashboard/Index',[
                'laboratories' => $this->dropdown->laboratory_types(),
            ]);
        }else{
            return inertia('Auth/Login');
        }
    }

    public function esms(){
        $contact = '09171531652';
        $message = "1 \n\n 2"; 
        dispatch(new SmsJob($contact, $message));
    }

    public function activation(Request $request){
        // dd($request->email);
        if(\Auth::check()){
            return redirect()->intended(route('dashboard', absolute: false));
        }else{
            return inertia('Auth/Activation',[
                'email' => $request->email,
                'token' => $request->token,
                'name' => $request->name
            ]);
        }
    }

}
