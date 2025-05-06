<?php

namespace App\Exports;

use App\Models\TsrSample;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class SampleExport implements FromView
{
    protected $year,$lab;

    function __construct($year,$lab) {
        $this->year = $year;
        $this->lab = ($lab != 'null') ? $lab : null;
    }

    public function view(): View
    {
        $lists = TsrSample::select('name', \DB::raw('count(*) as count'))
        ->when($this->lab, function ($query) {
            return $query->whereHas('tsr', function ($query) {
                $query->where('agency_id', $this->lab);
            });
        })
        ->whereYear('created_at',$this->year)
        ->groupBy('name')
        ->orderBy('count', 'desc')
        ->get();

        foreach ($lists as $row) {
            $tsrs[] = [
                "name" => $row['name'],
                "count" => $row['count']
            ];
        }

        return view('exports.samples', [
            'lists' => $tsrs
        ]);
    }
}
