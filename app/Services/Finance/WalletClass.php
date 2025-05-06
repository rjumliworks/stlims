<?php

namespace App\Services\Finance;

use App\Models\Tsr;
use App\Models\TsrPayment;
use App\Models\TsrPaymentDeduction;
use App\Models\Wallet;

class WalletClass
{
    public function wallet($request){
        $id = $request->id;
        $tsr_id = $request->tsr_id;
        $wallet_id = $request->wallet_id;
        $total = trim(str_replace(',','',$request->total),'₱');
        $wallet = Wallet::where('id',$wallet_id)->first();
        if($wallet){
            $available = trim(str_replace(',','',$wallet->available),'₱');
            $avail = ($available >= $total) ? $available - $total : 0;
            $wallet->available = $avail;
            if($wallet->save()){
                $code = date('Ymdgis');
                $data = Tsr::where('id',$tsr_id)->first();
                $data->transaction()->create([
                    'code' => $code,
                    'amount' => $total,
                    'balance' => trim(str_replace(',','',$wallet->available),'₱'),
                    'is_credit' => 0,
                    'wallet_id' => $wallet->id
                ]);

                if($data){
                    if($available >= $total){
                        $payment = TsrPayment::where('id',$id)->update([
                            'is_paid' => 1,
                            'payment_id' => 21, //wallet payment mode
                            'status_id' => 7,
                            'collection_id' => 25, //analysis/calibration collection fee
                            'or_number' => $code,
                            'paid_at' => now()
                        ]);

                        if($payment){
                            $tsr = Tsr::where('id',$tsr_id)->first();
                            $tsr->status_id = 3;
                            $tsr->save();
                        }
                    }else{
                        $deduction = TsrPaymentDeduction::create([
                            'code' => $code,
                            'amount' => $available,
                            'payment_id' => $id,
                            'wallet_id' => $wallet_id,
                            'user_id' => \Auth::user()->id
                        ]);
                        if($deduction){
                            $p = TsrPayment::where('id',$id)->first();
                            $p->has_deduction = 1;
                            $p->total = trim(str_replace(',','',$p->total),'₱') - $available;
                            $p->save();
                        }
                    }
                }
            }
        }
        return [
            'data' => $data,
            'message' => 'Wallet transaction was successful!', 
            'info' => "You've successfully used the wallet."
        ];
    }
}
