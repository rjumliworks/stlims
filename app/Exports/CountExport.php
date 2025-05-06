<?php

namespace App\Exports;

use App\Models\Customer;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class CountExport implements FromView
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

        $lists = Customer::query()->select('id','name','is_main','name_id','laboratory_id')->with('customer_name:id,name,has_branches')
        ->withCount(['tsrs' => function ($query){
            $query->whereIn('status_id', [3,4]);
        }])
        ->orderBy('tsrs_count', 'desc')
        ->get();

        foreach ($lists as $row) {
            $name = ($row['name'] == 'Main') ? '' : ' - '.$row['name'];
            $tsrs[] = [
                "name" => $row['customer_name']['name'].' '.$name,
                "count" => $row['tsrs_count']
            ];
        }

        return view('exports.count', [
            'lists' => $tsrs
        ]);
    }
}
