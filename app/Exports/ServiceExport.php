<?php

namespace App\Exports;

use App\Models\Testservice;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ServiceExport implements FromView
{
    protected $laboratory, $agency;

    function __construct($laboratory,$agency) {
        $this->laboratory = $laboratory;
        $this->agency = $agency;
    }

    public function view(): View
    {
        $lists = Testservice::where('agency_id',$this->agency)->where('laboratory_id',$this->laboratory)
        ->with('status')
        ->with('sampletype','testname','agency.member','agency.address.region','laboratory')
        ->with('method.method','method.reference')
        ->get();

        $services = [];
        foreach ($lists as $row) {
            $services[] = [
                "sample" => $row['sampletype']['name'],
                "testname" => $row['testname']['name'],
                "method" => $row['method']['method']['name'],
                "reference" => $row['method']['reference']['name'],
                "fee" => $row['method']['fee'],
                "status" => $row['status']['name'],
                "availability" => $row['is_active']
            ];
        }

        return view('exports.services', [
            'lists' => $services
        ]);
    }
}
