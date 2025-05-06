<?php

namespace App\Http\Controllers\Laboratory;

use App\Traits\HandlesTransaction;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Operation\AnalysisRequest;
use App\Services\Laboratory\Analysis\SaveClass;
use App\Services\Laboratory\Analysis\UpdateClass;

class AnalysisController extends Controller
{
    use HandlesTransaction;

    protected SaveClass $save;
    protected UpdateClass $update;

    public function __construct(SaveClass $save, UpdateClass $update){
        $this->save = $save;
        $this->update = $update;
    }

    public function store(AnalysisRequest $request){
        $result = $this->handleTransaction(function () use ($request) {
            switch($request->option){
                case 'service':
                    return $this->save->service($request);
                break;
                case 'fee':
                    return $this->save->fee($request);
                break;
                case 'delete':
                    return $this->save->delete($request);
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
        $request->validate([
            'start_at' => ['required_if:option,start'],
            'end_at' => ['required_if:option,end']
        ]);
        $result = $this->handleTransaction(function () use ($request) {
            switch($request->option){
                case 'start':
                    return $this->update->start($request);
                break;
                case 'end':
                    return $this->update->end($request);
                break;
                case 'tagging':
                    return $this->update->tagging($request);
                break;
                case 'group':
                    return $this->update->group($request);
                break;
                case 'delete':
                    return $this->save->deleteService($request);
                break;
                case 'service':
                    return $this->save->updateService($request);
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
