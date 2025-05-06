<?php

namespace App\Services\Finance;

use NumberFormatter;
use App\Models\Tsr;
use App\Models\Wallet;
use App\Models\TsrPayment;
use App\Models\FinanceOp;
use App\Models\FinanceItem;
use App\Models\FinanceName;
use App\Models\FinanceReceipt;
use App\Models\FinanceOrseries;
use App\Models\FinanceReceiptDetail;
use App\Models\AgencyConfiguration;
use App\Http\Resources\Finance\OrResource;

class OrClass
{
    public function __construct()
    {
        $this->agency = (\Auth::user()->myroles) ? \Auth::user()->myroles[0]->agency_id : null;
        $this->configuration = AgencyConfiguration::where('agency_id',$this->agency)->first();
    }
    
    public function lists($request){
        $data = OrResource::collection(
            FinanceOp::query()
            ->select('id','total','code','payment_id','status_id','collection_id','payorable_id','payorable_type','created_at','created_by')
            ->with('createdby:id','createdby.profile:user_id,firstname,lastname,middlename')
            ->with('payorable:id,name,name_id','payorable.customer_name:id,name')
            ->with('payment','collection','status')
            ->with(['items' => function ($query) {
                $query->with('itemable:id,code')->where('itemable_type', 'App\Models\Tsr');
            }, 'or:id,op_id,number','or.detail','or.wallet'])
            ->when($this->agency, function ($query,$agency) {
                $query->where('agency_id',$agency);
            })
            ->when($request->status, function ($query, $status) {
                $query->where('status_id',$status);
            })
            ->when($request->mode, function ($query, $mode) {
                $query->where('payment_id',$mode);
            })
            ->when($request->keyword, function ($query, $keyword) {
                $query->where('payorable_type', 'App\Models\Customer') // Ensures only 'Customer' types are filtered
                ->whereHasMorph('payorable', ['App\Models\Customer'], function ($query) use ($keyword) {
                    $query->whereHas('customer_name', function ($query) use ($keyword) {
                        $query->where('name', 'like', '%' . $keyword . '%');
                    });
                })
                ->orWhere('code', 'like', '%' . $keyword . '%')
                ->orWhereHas('or', function ($query) use ($keyword) {
                    $query->where('number', 'like', '%' . $keyword . '%');
                });
            })
            ->where('payorable_type', 'App\Models\Customer')
            ->where('status_id',7)
            ->orderBy('updated_at','DESC')
            ->paginate($request->count)
        );
        return $data;
    }

    public function save($request){
        if($request->option == 'receipt'){
            return $this->lab($request);
        }else{
            return $this->nonlab($request);
        }
    }

    private function lab($request){
        $result = \DB::transaction(function () use ($request){
            \DB::beginTransaction();
            $data = FinanceReceipt::create([
                'number' => $request->orseries['next'],
                'orseries_id' => $request->orseries['value'],  
                'op_id' => $request->selected['id'],
                // 'payor_id' => $request->selected['customer_id'],
                'deposit_id' => $request->deposit_id,
                'created_by' => \Auth::user()->id,
                'agency_id' => \Auth::user()->myroles[0]->agency_id
            ]);
            if($data){
                $items = $request->selected['items'];
                $op = FinanceOp::where('id',$request->selected['id'])->first();
                $op->status_id = 7;
                if($op->save()){
                    foreach($items as $item){
                        $id = $item['itemable_id'];
                        $payment = TsrPayment::where('tsr_id',$id)->first();
                        $payment->or_number = $request->orseries['next'];
                        $payment->is_paid = 1;
                        $payment->paid_at = now();
                        $payment->status_id = 7;
                        if($payment->save()){
                            $tsr = Tsr::where('id',$id)->first();
                            $tsr->status_id = 3;
                            $tsr->save();
                        }
                    }

                    $or = FinanceOrseries::where('id',$request->orseries['value'])->first();
                    if($or->next == $or->end){
                        $or->is_active = 0;
                    }else{
                        $next = $or->next+1;
                        $or->next = $next;
                    }
                    if($or->save()){
                        if($request->type === 'Cheque' || $request->type === 'Online Transfer' || $request->type === 'Bank Deposit'){
                            $cheque = new FinanceReceiptDetail;
                            $cheque->number = $request->details_number;
                            $cheque->amount = $request->details_amount;
                            $cheque->bank = $request->details_bank;
                            $cheque->date_at = $request->details_date_at;
                            $cheque->is_cheque = ($request->type === 'Bank Deposit') ? $request->details_is_cheque : false;
                            $cheque->receipt_id = $data->id;
                            if($cheque->save()){
                                $amount = trim(str_replace(',','',$request->details_amount),'₱');
                                $total = trim(str_replace(',','',$request->total),'₱');
                                
                                if($amount > $total){
                                    $total = $amount - $total;
                                    $customer_id = $request->selected['customer_id'];
                                    $op->total = (float) str_replace(',', '', trim($op->total, '₱ ')) + (float) str_replace(',', '', trim($total, '₱ ')); 
                                    $op->save();
                                    $wallet = Wallet::where('customer_id',$customer_id)->first();
                                    if($wallet){
                                        $wallet->total = $wallet->total + $total;
                                        $wallet->available = trim(str_replace(',','',$wallet->available),'₱') + $total;
                                        if($wallet->save()){
                                            $data->transaction()->create([
                                                'code' => date('Ymdgia'),
                                                'amount' => $total,
                                                'balance' => trim(str_replace(',','',$wallet->available),'₱'),
                                                'is_credit' => 1,
                                                'wallet_id' => $wallet->id
                                            ]);
                                            \DB::commit();  
                                        }else{
                                            $data = 'error';
                                            \DB::rollback();
                                        }
                                    }else{
                                        $wallet = new Wallet;
                                        $wallet->total = $total;
                                        $wallet->available = $total;
                                        $wallet->customer_id = $customer_id;
                                        if($wallet->save()){
                                            $data->transaction()->create([
                                                'code' => date('Ymdgis'),
                                                'amount' => $total,
                                                'balance' => $total,
                                                'is_credit' => 1,
                                                'wallet_id' => $wallet->id
                                            ]);
                                            \DB::commit();  
                                        }else{
                                            $data = 'error';
                                            \DB::rollback();
                                        }
                                    }
                                }else{
                                    \DB::commit();  
                                }
                            }else{
                                $data = 'error';
                                \DB::rollback();
                            }
                        }else{
                            \DB::commit();  
                        }
                    }else{
                        $data = 'error';
                        \DB::rollback();
                    }
                }else{
                    $data = 'error';
                    \DB::rollback();
                }
            }
            return ['data' => $data];
        });

        return [
            'data' => $result['data'],
            'message' => 'Receipt creation was successful!', 
            'info' => "You've successfully created the new receipt."
        ];
    }

    private function nonlab($request){
      
        $result = \DB::transaction(function () use ($request){
            \DB::beginTransaction();
            $payor = FinanceName::where('id',$request->customer_id)->first();
            $op = $payor->payorable()->create(array_merge($request->all(), [
                'code' => $this->generateCode(),
                'total' => 0,
                'status_id' => 7,
                'created_by' => \Auth::user()->id,
                'agency_id' => \Auth::user()->myroles[0]->agency_id
            ]));
            if($op){
                $items = $request->items;
                $total = 0;
                foreach($items as $item){
                    $i = FinanceItem::create([
                        'name' => $item['name'],
                        'amount' => $item['amount']
                    ]);
                    if($i){
                        $d = $i->itemable()->create([
                            'amount' => $item['amount'],
                            'op_id' => $op->id
                        ]);
                    }
                    $total = $total +  trim(str_replace(',','',$item['amount']),'₱');
                }
                $op->total = $total;
                $op->save();

                $receipt = FinanceReceipt::create(array_merge($request->all(), [
                    'number' => $request->orseries['next'],
                    'orseries_id' => $request->orseries['value'],  
                    'op_id' => $op->id,
                    // 'payor_id' => $request->customer_id,
                    'deposit_id' => $request->deposit_id,
                    'created_by' => \Auth::user()->id,
                    'agency_id' => \Auth::user()->myroles[0]->agency_id
                ]));
                if($receipt){
                    $or = FinanceOrseries::where('id',$request->orseries['value'])->first();
                    if($or->next == $or->end){
                        $or->is_active = 0;
                    }else{
                        $next = $or->next+1;
                        $or->next = $next;
                    }

                    if($or->save()){
                        
                        if($request->type === 'Cheque' || $request->type === 'Online Transfer' || $request->type === 'Bank Deposit'){
                            $details = new FinanceReceiptDetail;
                            $details->number = $request->details_number;
                            $details->amount = $request->details_amount;
                            $details->bank = $request->details_bank;
                            $details->date_at = $request->details_date_at;
                            $details->is_cheque = ($request->type === 'Bank Deposit') ? $request->details_is_cheque : false;
                            $details->receipt_id = $receipt->id;
                            $details->save();
                            \DB::commit();  
                        }else{
                            \DB::commit();  
                        }
                    }
                }else{
                    $data = 'error';
                    \DB::rollback();
                }
                
            }
            return ['data' => $op];
        });

        return [
            'data' => $result['data'],
            'message' => 'Receipt creation was successful!', 
            'info' => "You've successfully created the new receipt."
        ];
    }

    public function print($request){
        $id = $request->id;
        $items = [];
        $data = FinanceReceipt::with('op.payorable','op.items.itemable','agency','op.collection','op.payment','transaction','detail')->where('id',$id)->first();
        // return Excel::download(new OrExport($id), 'or.xlsx');
        if($data){
            $customer = ($data->op->payorable->customer_name) ? $data->op->payorable->customer_name->name : $data->op->payorable->name; 
            if($data->op->payorable->customer_name){
                $sub = ($data->op->payorable->name == 'Main') ? '' : ' - '.$data->op->payorable->name;
                foreach($data->op->items as $item){
                    $items[] = [
                        'name' => $item->itemable->code,
                        'amount' => $item->itemable->payment->total
                    ];
                }
                if($data->transaction){
                    $items[] = [
                        'name' => 'Credited to Customer Wallet',
                        'amount' => $data->transaction->amount
                    ];
                    $total = (float) str_replace(',', '', trim($data->op->total, '₱ ')) + (float) str_replace(',', '', trim($data->transaction->amount, '₱ ')); 
                    $total = number_format($total,2,'.',',');
                }else{
                    $total = $data->op->total;
                }
                
            }else{
                $sub = '';
                foreach($data->op->items as $item){
                    $items[] = [
                        'name' => $item->itemable->name,
                        'amount' => $item->itemable->amount
                    ];
                }
                $total = $data->op->total;
            }
        }
        $val = trim($data->op->total, '₱ ');
        $val = (float) str_replace(',', '', $val);
        $wholeNumber = intval($val);
   
        $digit = new NumberFormatter("en", NumberFormatter::SPELLOUT);
        $number = $digit->format($wholeNumber);

        $array = [
            'agency' => $this->configuration->acronym,
            'customer' => $customer.$sub,
            'word' => ucwords($number),
            'date' => $data->created_at,
            'detail' => ($data->detail) ? $data->detail : null,
            'total' => $data->op->total,
            'items' => $items,
            'payment' => $data->op->payment->name,
        ];
        $pdf = \PDF::loadView('prints.receipt',$array)->setPaper([0, 0, 300, 641.68], 'portrait');
        return $pdf->stream($data->number.'.pdf');
    }

    private function checkDecimal($number) {
        $decimal = $number - floor($number);
        $decimal = round($decimal, 2);
    
        if ($decimal == 0.00) {
            return ' And 00/100';
        } else {
            return ' And '.ltrim(substr($decimal, 2), '0').'/100';
        }
    }

    private function generateCode(){
        $year = date('Y'); 
        $c = FinanceOp::whereYear('created_at',$year)->count();
        $code = date('Y').date('m').'-'.str_pad((771+$c+1), 4, '0', STR_PAD_LEFT);  
        return $code;
    }
}
