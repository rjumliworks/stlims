<?php

namespace App\Http\Controllers\Others;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\DropdownClass;
use App\Services\Others\Personnel\ViewClass;

class PersonnelController extends Controller
{
    public function __construct(DropdownClass $dropdown, ViewClass $view){
        $this->dropdown = $dropdown;
        $this->view = $view;
    }

    public function index(Request $request){
        switch($request->option){
            case 'lists':
                return $this->view->lists($request);
            break;
            default :
            return inertia('Modules/Others/Personnels/Index',[
                'dropdowns' => [
                    'laboratories' => $this->view->laboratories()
                ],
            ]);
        }
    }

}
