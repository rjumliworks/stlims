<?php

namespace App\Exports;

use App\Models\Customer;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class PezaExport implements FromView
{
    protected $region,$province,$municipality,$barangay;

    function __construct($region,$province,$municipality,$barangay) {
        $this->region = $region;
        $this->province = $province;
        $this->municipality = $municipality;
        $this->barangay = $barangay;
    }

    public function view(): View
    {
         $lists = Customer::select('customers.id', 'customers.name','customers.is_main', 'customer_names.name as customer_name','customer_names.has_branches as has_branches',\DB::raw('COUNT(DISTINCT tsrs.id) as count'),\DB::raw('COUNT(tsr_analyses.id) as services'),\DB::raw('SUM(tsr_payments.total) as total'))
        ->join('tsrs', 'customers.id', '=', 'tsrs.customer_id')
        ->join('tsr_payments', 'tsrs.id', '=', 'tsr_payments.tsr_id')
        ->join('customer_names', 'customers.name_id', '=', 'customer_names.id')
        ->join('tsr_samples', 'tsr_samples.tsr_id', '=', 'tsrs.id')
        ->join('tsr_analyses', 'tsr_analyses.sample_id', '=', 'tsr_samples.id')
        ->where('tsr_payments.status_id',7)
        ->when($this->region, function ($query, $region) {
            $query->whereHas('address',function ($query) use ($region) {
                $query->where('region_code',$region);
            });
        })
        ->when($this->province, function ($query, $province) {
            $query->whereHas('address',function ($query) use ($province) {
                $query->where('province_code',$province);
            });
        })
        ->when($this->municipality, function ($query, $municipality) {
            $query->whereHas('address',function ($query) use ($municipality) {
                $query->where('municipality_code',$municipality);
            });
        })
        ->when($this->barangay, function ($query, $barangay) {
            $query->whereHas('address',function ($query) use ($barangay) {
                $query->where('barangay_code',$barangay);
            });
        })
        ->whereHas('tsrs',function ($query) {
            $query->whereYear('created_at', 2025)
            ->whereBetween(\DB::raw('MONTH(created_at)'), [1, 6]);
        })
        ->groupBy('customers.id', 'customers.name')
        ->orderBy('total','desc')
        ->get();

        foreach ($lists as $row) {
            $name = ($row['name'] == 'Main') ? '' : ' - '.$row['name'];
            $tsrs[] = [
                "name" => $row['customer_name'].' '.$name,
                "count" => $row['count'],
                "services" => $row['services'],
                "total" => $row['total']
            ];
        }

        return view('exports.peza', [
            'lists' => $tsrs
        ]);
    }
}
