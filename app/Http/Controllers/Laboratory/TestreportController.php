<?php

namespace App\Http\Controllers\Laboratory;

use App\Services\DropdownClass;
use App\Traits\HandlesTransaction;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Laboratory\Testreports\SaveClass;
use App\Services\Laboratory\Testreports\ViewClass;

class TestreportController extends Controller
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
            case 'qrcode':
                return $this->view->qrcode($request);
            break;
            case 'print':
                return $this->view->print($request);
            break;
            default :
                return inertia('Modules/Laboratory/Testreports/Index',[
                    'dropdowns' => [
                        'laboratories' => $this->dropdown->laboratories(),
                        'analysts' => $this->view->analysts()
                    ], 
                    'count' => $this->view->count()
                ]);
        }
    }

    public function store(Request $request){
        $result = $this->handleTransaction(function () use ($request) {
            return $this->save->reportnumber($request);
        });

        return back()->with([
            'data' => $result['data'],
            'message' => $result['message'],
            'info' => $result['info'],
            'status' => $result['status'],
        ]);
    }
}
