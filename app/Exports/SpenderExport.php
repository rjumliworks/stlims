<?php

namespace App\Exports;

use App\Models\Customer;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class SpenderExport implements FromView
{
    protected $year,$lab;

    function __construct($year,$lab) {
        $this->year = $year;
        $this->lab = ($lab != 'null') ? $lab : null;
    }

    public function view(): View
    {
        // $lists = TsrAnalysis::with('testservice.testname')
        // ->select('testservice_id', \DB::raw('count(*) as count'))
        // ->when($this->lab, function ($query) {
        //     return $query->withWhereHas('sample', function ($query)  {
        //         $query->whereHas('tsr', function ($query) {
        //             $query->when($this->lab, function ($query) {
        //                     $query->where('laboratory_type', $this->lab);
        //                 });
        //         });
        //     });
        // })
        // ->where('status_id', '!=', 13)
        // ->whereYear('created_at', $this->year)
        // ->groupBy('testservice_id')
        // ->orderBy('count', 'desc')
        // ->get();
        $lists = Customer::select('customers.id','customers.laboratory_id', 'customers.name','customers.is_main', 'customer_names.name as customer_name','customer_names.has_branches as has_branches',\DB::raw('SUM(tsr_payments.total) as total'))
        ->join('tsrs', 'customers.id', '=', 'tsrs.customer_id')
        ->join('tsr_payments', 'tsrs.id', '=', 'tsr_payments.tsr_id')
        ->join('customer_names', 'customers.name_id', '=', 'customer_names.id')
        ->where('tsr_payments.status_id',7)
        // ->when($this->lab, function ($query) {
        //     $query->where('customers.laboratory_id',$this->lab);
        // })
        // ->whereYear('tsr_payments.paid_at', $this->year)
        ->groupBy('customers.id', 'customers.name')
        ->orderBy('total','desc')
        ->get();

        foreach ($lists as $row) {
            $name = ($row['name'] == 'Main') ? '' : ' - '.$row['name'];
            $tsrs[] = [
                "name" => $row['customer_name'].' '.$name,
                "count" => $row['total']
            ];
        }

        return view('exports.spender', [
            'lists' => $tsrs
        ]);
    }
}
