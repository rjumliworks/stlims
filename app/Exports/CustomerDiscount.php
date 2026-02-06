<?php

namespace App\Exports;

use App\Models\Tsr;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class CustomerDiscount implements FromView
{
    protected $month,$year,$lab;

    function __construct($month,$year,$lab,$agency) {
        $this->month = $month;
        $this->year = $year;
        $this->lab = $lab;
        $this->agency = $agency;
    }

    public function view(): View {

        $agencyId = $this->agency;
        $query = Tsr::where('agency_id', 14)->where('status_id','!=',5)
        ->whereYear('created_at', $this->year)
        ->whereIn('id', function ($query) use ($agencyId) {
            $query->selectRaw('MIN(id)')
                ->from('tsrs')
                ->whereYear('created_at', $this->year)
                ->where('agency_id', $agencyId);
        })
       ->with([
            'customer:id,name,classification_id,sex_id,type_id,name_id,is_new',
            'customer.customer_name:id,name',
            'payment.discounted'
        ])
        ->withCount([
            'samples',
            'samples as analyses_count' => function ($q) {
                $q->join('tsr_analyses', 'tsr_analyses.sample_id', '=', 'tsr_samples.id');
            }
        ])
        ->when($this->lab, function ($query, $laboratory) {
            $query->where('laboratory_id',$laboratory);
        })
        ->where('status_id','!=',5)
        ->orderBy('created_at','ASC');
        if ($this->month) {
            $query->whereMonth('created_at', $this->month);
        }
        $tsrs = $query->get()->map(function ($item) {
            $discount = optional($item->payment->discounted)->name;
            $formattedDiscount = isset($item->payment->discount) ? '₱' . number_format($item->payment->discount, 2) : '-';

            $calibration = ($discount === 'Gratis - Calibration') ? $formattedDiscount : '-';
            $qc          = ($discount === 'Gratis - QC') ? $formattedDiscount : '-';
            $rd          = ($discount === 'Gratis - R&D') ? $formattedDiscount : '-';

            $health  = ($discount === 'Health Units') ? $formattedDiscount : '-';
            $student = ($discount === 'Student') ? $formattedDiscount : '-';
            $senior  = ($discount === 'Senior Citizen') ? $formattedDiscount : '-';
            $pwd     = ($discount === 'Persons with Disabilities') ? $formattedDiscount : '-';
            $women   = ($discount === 'Women\'s Month') ? $formattedDiscount : '-';

            $name = ($item->customer->name == 'Main') ? '' : ' - '.$item->customer->name;

            return [
                'code' => $item->code,
                'name' => $item->customer->customer_name->name.' '.$name,
                'samples' => $item->samples_count,
                'analyses' => $item->analyses_count,
                'fees' => $item->payment->total,
                'calibration' => $calibration,
                'qc' => $qc,
                'rd' => $rd,
                'health' => $health,
                'student' => $student,
                'senior' => $senior,
                'pwd' => $pwd,
                'women' => $women,
                'gross' => $item->payment->subtotal
               
            ];
        });

        return view('exports.customers', [
            'lists' => $tsrs
        ]);
    }
}
