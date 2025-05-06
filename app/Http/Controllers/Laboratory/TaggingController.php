<?php

namespace App\Http\Controllers\Laboratory;

use Illuminate\Http\Request;
use App\Services\DropdownClass;
use App\Traits\HandlesTransaction;
use App\Http\Controllers\Controller;
use App\Services\Laboratory\Tagging\ViewClass;
use App\Services\Laboratory\Tagging\SaveClass;
use App\Services\Laboratory\Tagging\DisposalClass;
use App\Http\Requests\Operation\DisposalRequest;

class TaggingController extends Controller
{
    use HandlesTransaction;

    public function __construct(DropdownClass $dropdown, SaveClass $save, ViewClass $view, DisposalClass $disposal){
        $this->dropdown = $dropdown;
        $this->save = $save;
        $this->view = $view;
        $this->disposal = $disposal;
    }

    public function index(Request $request){
        switch($request->option){
            case 'lists':
                return $this->view->lists($request);
            break;
            case 'disposals':
                return $this->disposal->lists($request);
            break;
            default :
            return inertia('Modules/Laboratory/Sampleregister/Index');
        }
    }

    public function show($id){
        return inertia('Modules/Laboratory/Sampleregister/View',[
            'sample' => $this->view->sample($id),
            'analysts' => $this->view->analysts()
        ]);
    }
}
