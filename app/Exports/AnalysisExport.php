<?php

namespace App\Exports;

use App\Models\TsrAnalysis;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class AnalysisExport implements FromView
{
    protected $year,$lab;

    function __construct($year,$lab) {
        $this->year = $year;
        $this->lab = ($lab != 'null') ? $lab : null;
    }

    public function view(): View
    {
        $lists = TsrAnalysis::with('testservice.testname')
        ->select('testservice_id', \DB::raw('count(*) as count'))
        ->when($this->lab, function ($query) {
            return $query->withWhereHas('sample', function ($query)  {
                $query->whereHas('tsr', function ($query) {
                    $query->when($this->lab, function ($query) {
                            $query->where('laboratory_id', $this->lab);
                        });
                });
            });
        })
        ->where('status_id', '!=', 13)
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
