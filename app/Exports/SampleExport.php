<?php

namespace App\Exports;

use App\Models\TsrSample;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class SampleExport implements FromView
{
    protected $year,$agency,$quarter,$semester,$customer,$by;

    function __construct($year,$laboratory,$quarter,$semester,$customer,$by) {
         $this->agency = (count(\Auth::user()->myroles) > 0) ? \Auth::user()->myroles[0]->agency_id : null;
        $this->year = $year;
        $this->laboratory = ($laboratory != 'null') ? $laboratory : null;
        $this->quarter = $quarter;
        $this->semester = $semester;
        $this->customer = $customer;
        $this->by = $by;
    }

    public function view(): View
    {
        $startMonth = null;
        $endMonth = null;
        $month = null;
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

        $lists = TsrSample::select('name', \DB::raw('count(*) as count'))
        ->withWhereHas('tsr', function ($query) use ($startMonth,$endMonth){
            $query->where('agency_id',$this->agency);
            $query->when($this->laboratory, function($query){
                $query->where('laboratory_id', $this->laboratory);
            });
            $query->whereHas('customer',function ($query){
                $query->when($this->customer, function ($query, $customer) {
                    ($customer == 'Internal') ? $query->where('is_internal',1) : $query->where('is_internal',0);
                });
            });
        })
        ->when($month, function ($query, $month) {
            $query->whereMonth('created_at',$month);
        })
        ->when($this->year, function($query){
            $query->whereYear('created_at',$this->year);
        })
        ->when(isset($startMonth) && isset($endMonth), function ($query) use ($startMonth, $endMonth) {
            $query->whereBetween(\DB::raw('MONTH(created_at)'), [$startMonth, $endMonth]);
        })
        ->groupBy('name')
        ->orderBy('count', 'desc')
        ->get();

        if(count($lists)>0){
            foreach ($lists as $row) {
                $tsrs[] = [
                    "name" => $row['name'],
                    "count" => $row['count']
                ];
            }
        }else{
            $tsrs = [];
        }

        // foreach ($lists as $row) {
        //         $tsrs[] = [
        //             "name" => $row['name'],
        //             "count" => $row['count']
        //         ];
        //     }

        return view('exports.samples', [
            'lists' => $tsrs
        ]);
    }
}
