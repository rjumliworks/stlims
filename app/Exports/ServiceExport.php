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
        $old_ids = [
            11, 126, 281, 84, 84, 84, 84, 84, 84, 71, 126, 126, 85, 85, 11, 163, 426, 150, 150, 91, 398, 398, 398, 398, 398,
            376, 102, 159, 190, 45, 173, 398, 95, 398, 97, 216, 85, 95, 85, 281, 398, 97, 87, 87, 398, 51, 105, 126, 99, 215
        ];

        $lists = Testservice::where('agency_id',$this->agency)
        // ->where('laboratory_id',$this->laboratory)
        // ->whereHas('analyses.sample.tsr', function ($q) {
        //     $q->where('agency_id', 14)
        //     ->whereIn('status_id', [1,2,3,4]);
        // })
        ->whereIn('id', $old_ids)
        ->with('status')
        ->with('sampletype','testname','agency.member','agency.address.region','laboratory')
        ->with('method.method','method.reference')
        ->get();

        $services = [];
        foreach ($lists as $row) {
            $services[] = [
                "id" => $row['id'],
                "sample" => $row['sampletype']['name'],
                "testname" => $row['testname']['name'],
                "code" => $row['method']['method']['short'],
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
