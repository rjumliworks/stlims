<?php

namespace App\Http\Controllers\Executive;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    public function index(Request $request){
        switch($request->option){
            case 'lists':
                return $this->view->users($request);
            break;
            default:
                return inertia('Modules/Executive/Address/Index',[
                    'dropdowns' => [
                        'agencies' => $this->dropdown->agencies(),
                        'laboratories' => $this->dropdown->laboratories(),
                        'roles' => $this->dropdown->roles(),
                    ]
                ]); 
        }   
    }
}
