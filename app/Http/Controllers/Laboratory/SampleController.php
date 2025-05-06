<?php

namespace App\Http\Controllers\Laboratory;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\HandlesTransaction;
use App\Services\Laboratory\Samples\ViewClass;
use App\Services\Laboratory\Samples\SaveClass;
use App\Services\Laboratory\Samples\DisposalClass;
use App\Services\Laboratory\Tagging\ViewClass as TaggingClass;
use App\Http\Requests\Operation\SampleRequest;

class SampleController extends Controller
{
    use HandlesTransaction;

    public function __construct(ViewClass $view, SaveClass $save, DisposalClass $disposal, TaggingClass $tagging){
        $this->view = $view;
        $this->save = $save;
        $this->disposal = $disposal;
        $this->tagging = $tagging;
    }

    public function index(Request $request){
        switch($request->option){
            case 'lists':
                return $this->view->lists($request);
            break;
            case 'qrcode':
                return $this->view->qrcode($request);
            break;
            case 'qrcode-list':
                return $this->view->qrcode_list($request);
            break;
            case 'disposals':
                return $this->disposal->lists($request);
            break;
            case 'tagging':
                return $this->tagging->lists($request);
            break;
            default :
                return inertia('Modules/Laboratory/Sampleregister/Index',[
                    'counts' => $this->view->counts()
                ]);
        }
    }

    public function show($id){
        return inertia('Modules/Laboratory/Sampleregister/View',[
            'sample' => $this->view->sample($id),
            'analysts' => $this->view->analysts()
        ]);
    }

    public function store(SampleRequest $request){
        $result = $this->handleTransaction(function () use ($request) {
            switch($request->option){
                case 'delete':
                    return $this->save->delete($request);
                break;
                case 'disposal':
                    return $this->disposal->save($request);
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

    public function update(Request $request){
        $result = $this->handleTransaction(function () use ($request) {
            return $this->save->update($request);
        });
        
        return back()->with([
            'data' => $result['data'],
            'message' => $result['message'],
            'info' => $result['info'],
            'status' => $result['status'],
        ]);
    }
}
