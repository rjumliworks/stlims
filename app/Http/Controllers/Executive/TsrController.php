<?php

namespace App\Http\Controllers\Executive;

use App\Services\DropdownClass;
use App\Traits\HandlesTransaction;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Executive\Tsrs\ViewClass;
use App\Services\Executive\Tsrs\SaveClass;
use App\Services\Executive\Tsrs\UpdateClass;

class TsrController extends Controller
{
    use HandlesTransaction;

    public function __construct(DropdownClass $dropdown, SaveClass $save, ViewClass $view, UpdateClass $update){
        $this->dropdown = $dropdown;
        $this->update = $update;
        $this->save = $save;
        $this->view = $view;
    }

    public function index(Request $request){
        switch($request->option){
            case 'lists':
                return $this->view->lists($request);
            break;
            case 'print':
                return $this->view->print($request);
            break;
            default :
            return inertia('Modules/Executive/Tsrs/Index',[
                'dropdowns' => [
                    'laboratories' => $this->dropdown->laboratories(),
                    'discounts' => $this->dropdown->discounts(),
                    'agencies' => $this->dropdown->allagencies(),
                    'statuses' => $this->dropdown->statuses('Request'),
                    'services' => $this->dropdown->services(),
                    'purposes' => $this->dropdown->dropdowns('Purpose','n/a'),
                ],
                'counts' => $this->view->counts($this->dropdown->statuses('Request')),
                'region' => ''
            ]);
        }
    }

     public function show($id){
        return inertia('Modules/Executive/Tsrs/Profile/Index',[
            'tsr' => $this->view->view($id),
            'analyses' => $this->view->analyses($id),
            'services' => $this->dropdown->services(),
            'laboratories' => $this->dropdown->laboratories(),
            'dropdowns' => [
                'laboratories' => $this->dropdown->laboratories(),
                'discounts' => $this->dropdown->discounts(),
                'agencies' => $this->dropdown->allagencies(),
                'statuses' => $this->dropdown->statuses('Request'),
                'services' => $this->dropdown->services(),
                'purposes' => $this->dropdown->dropdowns('Purpose','n/a'),
            ],
        ]);
    }

     public function update(Request $request){
        $result = $this->handleTransaction(function () use ($request) {
            switch($request->option){
                case 'Cancel':
                    return $this->update->cancel($request);
                break;
                case 'Update':
                    return $this->update->update($request);
                break;
            }
        });
        
        return back()->with([
            'data' => $result['data'],
            'message' => $result['message'],
            'info' => $result['info'],
            'status' => $result['status'],
        ]);
    }

}
