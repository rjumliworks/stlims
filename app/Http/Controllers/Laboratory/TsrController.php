<?php

namespace App\Http\Controllers\Laboratory;

use App\Services\DropdownClass;
use App\Traits\HandlesTransaction;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Operation\TsrRequest;
use App\Services\Laboratory\Tsrs\ViewClass;
use App\Services\Laboratory\Tsrs\SaveClass;
use App\Services\Laboratory\Tsrs\UpdateClass;
use App\Http\Requests\Laboratory\TsrUpdateRequest;

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
            return inertia('Modules/Laboratory/Tsrs/Index',[
                'dropdowns' => [
                    'laboratories' => $this->dropdown->laboratories(),
                    'discounts' => $this->dropdown->agency_discounts(),
                    'agencies' => $this->dropdown->allagencies(),
                    'statuses' => $this->dropdown->statuses('Request'),
                    'services' => $this->dropdown->services(),
                    'purposes' => $this->dropdown->dropdowns('Purpose','n/a'),
                    'regions' => $this->dropdown->regions(),
                ],
                'counts' => $this->view->counts($this->dropdown->statuses('Request')),
                'region' => $this->view->region()
            ]);
        }
    }

    public function show($id){
        return inertia('Modules/Laboratory/Tsrs/Profile/Index',[
            'tsr' => $this->view->view($id),
            'analyses' => $this->view->analyses($id),
            'services' => $this->dropdown->services(),
            'laboratories' => $this->dropdown->laboratories(),
            'dropdowns' => [
                'laboratories' => $this->dropdown->laboratories(),
                'discounts' => $this->dropdown->agency_discounts(),
                'agencies' => $this->dropdown->allagencies(),
                'statuses' => $this->dropdown->statuses('Request'),
                'services' => $this->dropdown->services(),
                'purposes' => $this->dropdown->dropdowns('Purpose','n/a'),
            ],
        ]);
    }

    public function store(TsrRequest $request){
        $result = $this->handleTransaction(function () use ($request) {
            switch($request->option){
                case 'copy':
                    return $this->save->copy($request);
                break;
                default:
                    return $this->save->save($request);
            }
        });

        return back()->with([
            'data' => $result['data'],
            'message' => $result['message'],
            'info' => $result['info'],
            'status' => $result['status'],
        ]);
    }

    public function update(TsrUpdateRequest $request){
        $result = $this->handleTransaction(function () use ($request) {
            switch($request->option){
                case 'Confirm':
                    return $this->update->confirm($request);
                break;
                case 'Cancel':
                    return $this->update->cancel($request);
                break;
                case 'Update':
                    return $this->update->update($request);
                break;
                 case 'Child':
                    return $this->update->child($request);
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
