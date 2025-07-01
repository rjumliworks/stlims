<?php

namespace App\Http\Controllers\Others;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\DropdownClass;
use App\Services\Others\Accomplishment\ViewClass;

class AccomplishmentController extends Controller
{
    public function __construct(ViewClass $view, DropdownClass $dropdown){
        $this->dropdown = $dropdown;
        $this->view = $view;
    }

     public function index(Request $request){
        switch($request->option){
            case 'view':
                return $this->view->show($request,$this->dropdown->agencies());
            break;
        }   
    }
}
