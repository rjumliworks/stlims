<?php

namespace App\Exports;

use App\Models\Tsr;
use App\Models\LocationBarangay;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class LocationExport implements FromView
{
    protected $code;

    function __construct($code) {
        $this->code = $code;
    }

    public function view(): View
    {
        $lists = LocationBarangay::whereHas('municipality', function ($query) {
            $query->whereHas('province', function ($query){
                $query->where('code', $this->code);
            });
        })
        ->get();
        foreach ($lists as $row) {
            $code = $row['code'];
            $count = Tsr::whereHas('customer', function ($query) use ($code) {
                $query->whereHas('address', function ($query) use ($code){
                    $query->where('addressable_type','App\Models\Customer')->where('barangay_code', $code);
                });
            })->count();

            $barangays[] = [
                "barangay" => $row['name'],
                "municipality" => $row['municipality']['name'],
                "count" => $count
            ];
        }


        return view('exports.location', [
            'lists' => $barangays
        ]);
    }

}
