<?php

namespace App\Exports;

use App\Models\TsrAnalysis;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class AnalysisExport implements FromView
{
    protected $year,$lab,$quarter,$semester,$customer,$by;

    function __construct($year,$lab,$quarter,$semester,$customer,$by) {
        $this->year = $year;
        $this->lab = ($lab != 'null') ? $lab : null;
        $this->quarter = $quarter;
        $this->semester = $semester;
        $this->customer = $customer;
        $this->by = $by;
    }

    public function view(): View
    {
        $startMonth = null;
        $endMonth = null;
        if($this->by == 'By Month'){
            $month = ($this->month) ? \DateTime::createFromFormat('F', $this->month)->format('m') : null; 
        }elseif($this->by == 'By Quarter'){
            switch($this->quarter){
                case '1st Quarter':
                    $startMonth = 1;
                    $endMonth = 3;
                break;
                case '2nd Quarter':
                    $startMonth = 4;
                    $endMonth = 6;
                break;
                case '3rd Quarter':
                    $startMonth = 7;
                    $endMonth = 9;
                break;
                case '4th Quarter':
                    $startMonth = 10;
                    $endMonth = 12;
                break;
            }
        }else{
            switch($this->semester){
                case '1st Semester':
                    $startMonth = 1;
                    $endMonth = 6;
                break;
                case '2nd Semester':
                    $startMonth = 7;
                    $endMonth = 12;
                break;
            }
        }
        
        $lists = TsrAnalysis::with('testservice.testname')
        ->select('testservice_id', \DB::raw('count(*) as count'))
        ->when($this->lab, function ($query) {
            return $query->withWhereHas('sample', function ($query)  {
                $query->whereHas('tsr', function ($query){
                    $query->when($this->lab, function ($query) {
                        $query->where('laboratory_id', $this->lab);
                    });
                    $query->whereHas('customer',function ($query){
                        $query->when($this->customer, function ($query, $customer) {
                            ($customer == 'Internal') ? $query->where('is_internal',1) : $query->where('is_internal',0);
                        });
                    });
                });
            });
        })
        ->where('status_id', '!=', 13)
        ->when(isset($startMonth) && isset($endMonth), function ($query) use ($startMonth, $endMonth) {
            $query->whereBetween(\DB::raw('MONTH(created_at)'), [$startMonth, $endMonth]);
        })
        ->whereYear('created_at', $this->year)
        ->groupBy('testservice_id')
        ->orderBy('count', 'desc')
        ->get();

        foreach ($lists as $row) {
            $tsrs[] = [
                "name" => $row['testservice']['testname']['name'],
                "count" => $row['count']
            ];
        }

        return view('exports.analysis', [
            'lists' => $tsrs
        ]);
    }
}
