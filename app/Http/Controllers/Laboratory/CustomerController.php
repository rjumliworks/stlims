<?php

namespace App\Http\Controllers\Laboratory;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\HandlesTransaction;
use App\Services\DropdownClass;
use App\Services\Laboratory\Customer\SaveClass;
use App\Services\Laboratory\Customer\ViewClass;
use App\Http\Requests\Operation\CustomerRequest;

class CustomerController extends Controller
{
    use HandlesTransaction;

    public function __construct(SaveClass $save, ViewClass $view, DropdownClass $dropdown){
        $this->view = $view;
        $this->save = $save;
        $this->dropdown = $dropdown;
    }

    public function index(Request $request){
        switch($request->option){
            case 'lists':
                return $this->view->lists($request);
            break;
            case 'counts':
                return $this->view->counts($request);
            break;
            case 'tsrs':
                return $this->view->tsrs($request);
            break;
            case 'search':
                return $this->view->search($request);
            break;
            case 'pick':
                return $this->view->pick($request);
            break;
            default :
            return inertia('Modules/Laboratory/Customers/Index',[
                'dropdowns' => [
                    'industries' => $this->dropdown->industries(),
                    'sexs' => $this->dropdown->dropdowns('Sex','n/a'),
                    'individuals' => $this->dropdown->dropdowns('Individual','n/a'),
                    'classes' => $this->dropdown->dropdowns('Class','n/a'),
                    'individuals' => $this->dropdown->dropdowns('Individual','n/a'),
                    'sexs' => $this->dropdown->dropdowns('Sex','n/a'),
                    'females' => $this->dropdown->dropdowns('Female','n/a'),
                    'regions' => $this->dropdown->regions(),
                    'agencies' => $this->dropdown->agencies(),
                ],
                'region' => $this->view->region()
            ]);
        }
    }

    public function store(CustomerRequest $request){
        $result = $this->handleTransaction(function () use ($request) {
            if($request->option == 'customer'){
                return $this->save->save($request);
            }else{
                return $this->save->conforme($request);
            }
        });

        return back()->with([
            'data' => $result['data'],
            'message' => $result['message'],
            'info' => $result['info'],
            'status' => $result['status'],
        ]);
    }

    public function update(Request $request){
        $result = $this->handleTransaction(function () use ($request) {
            if($request->option == 'customer'){
                return $this->save->update($request);
            }else{
                return $this->save->updateConforme($request);
            }
        });
        
        return back()->with([
            'data' => $result['data'],
            'message' => $result['message'],
            'info' => $result['info'],
            'status' => $result['status'],
        ]);
    }

    public function show($id){
        $customer = $this->view->view($id);
        return inertia('Modules/Laboratory/Customers/Profile/Index',[
            'customer' => $customer
        ]);
    }
}
