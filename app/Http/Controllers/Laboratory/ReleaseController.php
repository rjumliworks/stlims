<?php

namespace App\Http\Controllers\Laboratory;

use App\Traits\HandlesTransaction;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Operation\ReleaseRequest;
use App\Services\Laboratory\Release\ReleasingClass;

class ReleaseController extends Controller
{
    use HandlesTransaction;

    public function __construct(ReleasingClass $releasing){
        $this->releasing = $releasing;
    }

    public function index(Request $request){
        switch($request->option){
            case 'lists':
                return $this->releasing->lists($request);
            break;
            case 'filter':
                return $this->releasing->filter($request);
            break;
        }
    }

    public function store(ReleaseRequest $request){
        $result = $this->handleTransaction(function () use ($request) {
            return $this->releasing->save($request);
        });

        return back()->with([
            'data' => $result['data'],
            'message' => $result['message'],
            'info' => $result['info'],
            'status' => $result['status'],
        ]);
    }

    public function update(ReleaseRequest $request){
        $result = $this->handleTransaction(function () use ($request) {
            return $this->releasing->update($request);
        });

        return back()->with([
            'data' => $result['data'],
            'message' => $result['message'],
            'info' => $result['info'],
            'status' => $result['status'],
        ]);
    }
}
