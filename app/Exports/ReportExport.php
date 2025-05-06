<?php

namespace App\Exports;

use App\Models\TsrSampleReport;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ReportExport implements FromView
{
    protected $month,$year,$lab;

    function __construct($month,$year,$lab) {
        $this->month = $month;
        $this->year = $year;
        $this->lab = $lab;
    }

    public function view(): View
    {
        $lists = TsrSampleReport::with('sample.tsr')
        ->when($this->lab, function ($query) {
            $query->whereHas('sample', function ($query) {
                $query->whereHas('tsr', function ($query) {
                    $query->where('agency_id', $this->lab);
                });
            });
        })
        ->whereMonth('created_at',$this->month)
        ->whereYear('created_at',$this->year)
        ->get();

        foreach ($lists as $row) {
            $tsrs[] = [
                "code" => $row['code'],
                "sample_code" => $row['sample']['code'],
                "created_at" =>  $row['created_at'],
            ];
        }

        return view('exports.reports', [
            'lists' => $tsrs
        ]);
    }
}
