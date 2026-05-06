<?php

namespace App\Http\Controllers\Others;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\DropdownClass;
use App\Services\Others\Accomplishment\ViewClass;
use App\Services\Others\Accomplishment\CustomerClass;

class AccomplishmentController extends Controller
{
    public function __construct(ViewClass $view, CustomerClass $customer, DropdownClass $dropdown){
        $this->dropdown = $dropdown;
        $this->view = $view;
        $this->customer = $customer;
    }

     public function index(Request $request){
        switch($request->option){
            case 'view':
                return $this->view->show($request,$this->dropdown->agencies());
            break;
            case 'customer':
                return $this->customer->view($request);
            break;
            case 'customer_data':
                return $this->customer->list($request);
            break;
            case 'customer2':
                return $this->customer->view2($request);
            break;
            case 'customer2_data':
                return $this->customer->list2($request);
            break;
             case 'customer3':
                return $this->customer->view3($request);
            break;
            case 'customer3_data':
                return $this->customer->list3($request);
            break;
            case 'excel':
                return $this->customer->excel($request);
            break;
            case 'excel2':
                return $this->customer->excel2($request);
            break;
            case 'excel3':
                return $this->customer->excel3($request);
            break;
        }   
    }
}
