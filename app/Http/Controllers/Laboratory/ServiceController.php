<?php

namespace App\Http\Controllers\Laboratory;

use App\Traits\HandlesTransaction;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Operation\NameRequest;
use App\Services\DropdownClass;
use App\Services\Laboratory\Services\ViewClass;
use App\Services\Laboratory\Services\SaveClass;

class ServiceController extends Controller
{
    use HandlesTransaction;

    public function __construct(ViewClass $view, SaveClass $save, DropdownClass $dropdown){
        $this->dropdown = $dropdown;
        $this->view = $view;
        $this->save = $save;
    }

    public function index(Request $request){
        switch($request->option){
            case 'lists':
                return $this->view->lists($request);
            break;
            case 'search': //sampletype or testname
                return $this->view->search($request);
            break;
            case 'methods':
                return $this->view->methods($request);
            break;
            case 'testservices':
                return $this->view->testservices($request);
            break;
            default :
            return inertia('Modules/Laboratory/Services/Index',[
                'dropdowns' => [
                    'agencies' => $this->dropdown->agencies(),
                    'laboratories' => $this->dropdown->laboratories()
                ],
                'laboratory' => []
                // $this->view->laboratory()
            ]);
        }
    }

    public function store(NameRequest $request){
        $option = $request->option;
        switch($option){
            case 'add':
                return $this->save->add($request);
            break;
            case 'create':
                $result = $this->handleTransaction(function () use ($request) {
                    return $this->save->create($request);
                });
                return back()->with([
                    'data' => $result['data'],
                    'message' => $result['message'],
                    'info' => $result['info'],
                    'status' => $result['status'],
                ]);
            break;
            case 'fee':
                $result = $this->handleTransaction(function () use ($request) {
                    return $this->save->fee($request);
                });
                return back()->with([
                    'data' => $result['data'],
                    'message' => $result['message'],
                    'info' => $result['info'],
                    'status' => $result['status'],
                ]);
            break;
            case 'method':
                return $this->save->method($request);
            break;
            case 'preview':
                return $this->save->preview($request);
            break;
            case 'upload':
                return $this->save->upload($request);
            break;
        }
    }
}
