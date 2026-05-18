<?php

namespace App\Exports;

use App\Models\FinanceOp;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class OpTypeExport implements FromView
{
    protected $month,$year,$laboratory;

    function __construct($month,$year,$laboratory) {
        $this->month = $month;
        $this->year = $year;
        $this->laboratory = $laboratory;
    }

    public function view(): View {
        $lists = FinanceOp::select('id','total','code','payment_id','payorable_id','payorable_type','created_at','created_by')
        ->with('createdby:id','createdby.profile:user_id,firstname,lastname,middlename')
        ->with('payorable:id,name,name_id','payorable.customer_name:id,name')
        ->with('payment')
        ->with(['items' => function ($query) {
            $query->with('itemable:id,code')->where('itemable_type', 'App\Models\Tsr');
        }, 'or:id,op_id,number','or.detail','or.wallet'])
        ->where('payorable_type', 'App\Models\Customer')
        ->where('status_id',7)
        ->whereIn('payment_id',[20,21])
        ->where('agency_id',$this->laboratory)
        ->get();

        $ops = [];

        foreach ($lists as $row) {
            $name = ($row['payorable']['name'] == 'Main') ? '' : ' - '.$row['payorable']['name'];
            $customer = $row['payorable']['customer_name']['name'].$name;
            $created = $row['createdby']['profile']['firstname'].' '.$row['createdby']['profile']['middlename'][0].'. '.$row['createdby']['profile']['lastname'];
            if($row['payment']['name'] == 'Cash' || $row['payment']['name'] == 'Wallet'){
                $amount = $row['total'];
                $excess = '-';
            }else{
                $amount = $row['or']['detail']['amount'];
                if($row['or']['wallet']){
                    $excess = $row['or']['wallet']['amount'];
                }else{
                    $excess = '-';
                }
            }

            $ops[] = [
                "date" => $row['created_at'],
                "opnumber" => $row['code'],
                "customer" => $customer,
                "references" => $row['items'],
                "payment" => $row['payment']['name'],
                "opamount" => $row['total'],
                "ornumber" => $row['or']['number'],
                "excess" => $excess,
                "oramount" => $amount,
                "created" => $created
            ];

              $totalOrAmount = collect($ops)->sum(function($item) {
                return floatval(
                    str_replace(['₱', ','], '', $item['oramount'])
                );
            });
        }

        return view('exports.financetypeop', [
            'lists' => $ops,
            'total_or' => $totalOrAmount
        ]);
    }  
}
