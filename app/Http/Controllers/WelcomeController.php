<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Traits\HandlesTransaction;
use Illuminate\Support\Facades\Http;
use App\Services\DropdownClass;
use Illuminate\Validation\Rules\Password;

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

    public function activation(){
   
        return inertia('Auth/Activation');
        
    }

    public function activate(Request $request){
        $validated = $request->validate([
            'password' => [
                'required',
                'confirmed',
                Password::min(8)
                    ->mixedCase()     // must include uppercase and lowercase
                    ->letters()       // must include letters
                    ->numbers()       // must include numbers
                    ->symbols()       // must include symbols
                    ->uncompromised() // checks against data leaks (optional)
            ],
        ]);
        $id = \Auth::user()->id;
        $user = User::findOrFail($id);
        $user->is_active = 1;
        $user->is_new = 0;
        $user->password = bcrypt($validated['password']);
        if($user->save()){
            return redirect()->intended(route('dashboard', absolute: false));
        }
    }
}
