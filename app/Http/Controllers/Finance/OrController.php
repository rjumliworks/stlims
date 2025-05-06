<?php

namespace App\Http\Controllers\Finance;

use App\Traits\HandlesTransaction;
use App\Services\DropdownClass;
use App\Services\Finance\OrClass;
use App\Http\Controllers\Controller;
use App\Http\Requests\Finance\OrRequest;
use Illuminate\Http\Request;

class OrController extends Controller
{
    use HandlesTransaction;

    public function __construct(DropdownClass $dropdown, OrClass $or){
        $this->dropdown = $dropdown;
        $this->or = $or;
    }

    public function index(Request $request){
        switch($request->option){
            case 'lists':
                return $this->or->lists($request);
            break;
            case 'print':
                return $this->or->print($request);
            break;
            default :
            return inertia('Modules/Finance/Cashiering/Receipts/Index',[
                'dropdowns' => [
                    'payments' => $this->dropdown->dropdowns('Payment Mode','n/a'),
                    'statuses' => $this->dropdown->statuses('Payment'),
                ]
            ]);
        }
    }

    public function store(OrRequest $request){
        $result = $this->handleTransaction(function () use ($request) {
            return $this->or->save($request);
        });

        return back()->with([
            'data' => $result['data'],
            'message' => $result['message'],
            'info' => $result['info'],
            'status' => $result['status'],
        ]);
    }

}
