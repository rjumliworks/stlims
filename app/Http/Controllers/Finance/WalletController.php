<?php

namespace App\Http\Controllers\Finance;

use App\Traits\HandlesTransaction;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Finance\WalletClass;

class WalletController extends Controller
{
    use HandlesTransaction;

    public function __construct(WalletClass $wallet){
        $this->wallet = $wallet;
    }

    public function store(Request $request){
        $result = $this->handleTransaction(function () use ($request) {
            switch($request->option){
                case 'wallet':
                    return $this->wallet->wallet($request);
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
