<?php

namespace App\Services\Others\Accomplishment;

use App\Models\Tsr;
use App\Models\Target;
use App\Models\AgencyFacilityLaboratory;
use App\Exports\CustomerExport;
use App\Exports\CustomerDiscount;
use Maatwebsite\Excel\Facades\Excel;

class CustomerClass
{
    public function __construct()
    {
        $this->agency = (count(\Auth::user()->myroles)>0) ? \Auth::user()->myroles[0]->agency_id : null;
    }

    public function view(){
        $months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun','Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
        return inertia('Modules/Others/Accomplishments/Customer',[
            'years' => $this->years(),
            'selected' => [
                'year' => date('Y'),
            ]
        ]);
    }

    public function list($request)
    {
        $year = $request->year;
        $month = $request->month ?? null; 
        $agencyId = $this->agency;

        $query = Tsr::where('agency_id', $agencyId)
        ->whereYear('created_at', $year)
        ->whereIn('id', function ($query) use ($year, $agencyId) {
            $query->selectRaw('MIN(id)')
                ->from('tsrs')
                ->whereYear('created_at', $year)
                ->where('agency_id', $agencyId)
                ->groupBy('customer_id');
        })
        ->with([
            'customer.address.province','customer.address.municipality','customer.address.barangay.district',
            'customer:id,name,classification_id,sex_id,type_id,name_id,is_new',
            'customer.classification','customer.sex',
            'customer.type',
            'customer.customer_name:id,name',
            'payment'
        ])
        ->orderBy('created_at','ASC');

        if ($month) {
            $query->whereMonth('created_at', $month);
        }
        return $query->get()->map(function ($item) {
            $municipality = optional($item->customer->address->municipality)->name;
            $province     = optional($item->customer->address->province)->name;
            
            $isZamboangaProvince = in_array($province, [
                'Zamboanga Del Norte', 
                'Zamboanga Del Sur', 
                'Zamboanga Sibugay'
            ]);

            // Get barangay district for all locations
            $barangayDistrict = optional($item->customer->address->barangay->district)->name;
            
            // Get municipality district only for Zamboanga provinces
            if ($isZamboangaProvince) {
                $municipalityDistrict = optional($item->customer->address->municipality)->district;
            }

            $classification = optional($item->customer->classification)->name;
            $sex = optional($item->customer->sex)->name;
            $type = optional($item->customer->type)->name;

            $ic   = $municipality === 'Isabela City';
            $zc   = $municipality === 'Zamboanga City';
            $sulu = $province === 'Sulu';
            $zdn  = $province === 'Zamboanga Del Norte';
            $zds  = $province === 'Zamboanga Del Sur' && !$zc;
            $zsp  = $province === 'Zamboanga Sibugay';

            // Initialize district flags
            $zcFirstDistrict = false;
            $zcSecondDistrict = false;
            $provinceFirstDistrict = false;
            $provinceSecondDistrict = false;
            
            // For Zamboanga City: use barangay district
            if ($zc) {
                $zcFirstDistrict = $barangayDistrict === '1st';
                $zcSecondDistrict = $barangayDistrict === '2nd';
            }
            
            // For Zamboanga provinces: use municipality district
            if ($isZamboangaProvince && isset($municipalityDistrict)) {
                $districtStr = (string) $municipalityDistrict;
                if (strpos($districtStr, '1') !== false || $districtStr === '1') {
                    $provinceFirstDistrict = true;
                } elseif (strpos($districtStr, '2') !== false || $districtStr === '2') {
                    $provinceSecondDistrict = true;
                }else if (strpos($districtStr, '3') !== false || $districtStr === '3'){
                    $provinceThirdDistrict = true;
                }
            }

            $male = false;
            $female = false;
            $student = false;
            $senior = false;
            $pwd = false;
            $paying = false;
            $nonpay = false;

            if ($classification === 'Firm') {
                // if($item->customer->payment->discount == )
                if($item->payment->is_free == 1){
                    $paying = false;
                    $nonpay = true;
                }else{
                    $paying = true;
                    $nonpay = false;
                }
            } elseif ($classification === 'Individual') {
                // Check sex
                if ($sex === 'Male') {
                    $male = true;
                    $female = false;
                } elseif ($sex === 'Female') {
                    $male = false;
                    $female = true;
                }
                
                // Check type
                if ($type === 'Student') {
                    $student = true;
                } elseif ($type === 'Senior Citizen') {
                    $senior = true;
                } elseif ($type === 'Person with Disability') {
                    $pwd = true;
                }
            }

            $zdn1 = false;
            $zdn2 = false;
            $zdn3 = false;
            $zds1 = false;
            $zds2 = false;
            $zsp1 = false;
            $zsp2 = false;

            if ($zdn) {
                if ($provinceFirstDistrict) {
                    $zdn1 = true;
                    $zdn2 = false;
                    $zdn3 = false;
                } elseif ($provinceSecondDistrict) {
                    $zdn1 = false;
                    $zdn2 = true;
                    $zdn3 = false;
                }elseif ($provinceThirdDistrict) {
                    $zdn1 = false;
                    $zdn2 = false;
                    $zdn3 = true;
                }
            }

            // Check district for Zamboanga Del Sur (excluding Zamboanga City)
            if ($zds) {
                if ($provinceFirstDistrict) {
                    $zds1 = true;
                    $zds2 = false;
                } elseif ($provinceSecondDistrict) {
                    $zds1 = false;
                    $zds2 = true;
                }
            }

            // Check district for Zamboanga Sibugay
            if ($zsp) {
                if ($provinceFirstDistrict) {
                    $zsp1 = true;
                    $zsp2 = false;
                } elseif ($provinceSecondDistrict) {
                    $zsp1 = false;
                    $zsp2 = true;
                }
            }
            $name = ($item->customer->name == 'Main') ? '' : ' - '.$item->customer->name;

            return [
                'name' => $item->customer->customer_name->name.' '.$name,
                'ic'   => $ic,
                'sulu' => $sulu,
                'zc1'  => $zc && $zcFirstDistrict,  // Use barangay district for ZC
                'zc2'  => $zc && $zcSecondDistrict, // Use barangay district for ZC
                'zdn1' => $zdn1,
                'zdn2' => $zdn2,
                'zdn3' => $zdn3,
                'zds1' => $zds1,
                'zds2' => $zds2,
                'zsp1' => $zsp1,
                'zsp2' => $zsp2,
                'outside' => !($ic || $zc || $sulu || $zdn || $zds || $zsp),
                'paying' => $paying,
                'nonpay' => $nonpay,
                'male' => $male,
                'female' => $female,
                'student' => $student,
                'senior' => $senior,
                'pwd' => $pwd,
                'isnew' => ($item->customer->is_new == 1) ? true : false
            ];
        });
    }

    public function view2(){
        $months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun','Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
        return inertia('Modules/Others/Accomplishments/Customer2',[
            'years' => $this->years(),
            'selected' => [
                'year' => date('Y'),
            ],
            'laboratories' =>  AgencyFacilityLaboratory::with('laboratory')
            ->withWhereHas('facility', function ($query) {
                $query->where('agency_id', $this->agency);
            })
            ->get()
            ->map(function ($item) {
                return [
                    'value' => $item->laboratory->id,
                    'name'  => $item->laboratory->name,
                ];
            })
            ->unique('value')
            ->values()
        ]);
    }

    public function list2($request)
    {
        $laboratory = $request->laboratory;
        $year = $request->year;
        $monthInput = $request->month;

        if (is_null($monthInput)) {
            $month = date('m'); // current month (01–12)
        } else {
            $month = date('m', strtotime($monthInput));
        }
        $agencyId = $this->agency;

        $query = Tsr::where('agency_id', $agencyId)
        ->whereYear('created_at', $year)
        ->whereIn('id', function ($query) use ($year, $agencyId) {
            $query->selectRaw('MIN(id)')
                ->from('tsrs')
                ->whereYear('created_at', $year)
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
        ->when($laboratory, function ($query, $laboratory) {
            $query->where('laboratory_id',$laboratory);
        })
        ->where('status_id','!=',5)
        ->orderBy('code', 'ASC');

        if ($month) {
            $query->whereMonth('created_at', $month);
        }
        return $query->get()->map(function ($item) {
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
    }

    public function years(){
        return Target::distinct()->pluck('year');
    }

    public function excel($request){
        $monthInput = $request->month ?? date('F'); // default to full month name if empty

// Convert month name to number
$month = is_numeric($monthInput) 
    ? (int) $monthInput 
    : date('m', strtotime($monthInput));
        $year = ($request->year) ? $request->year : date('Y');
        $lab = $request->laboratory;
        $agency = $this->agency;
        return Excel::download(new CustomerExport($month,$year,$lab,$agency), 'customer.xlsx');
    }

    public function excel2($request){
        $monthInput = $request->month ?? date('F'); // default to full month name if empty

// Convert month name to number
$month = is_numeric($monthInput) 
    ? (int) $monthInput 
    : date('m', strtotime($monthInput));
        $year = ($request->year) ? $request->year : date('Y');
        $lab = $request->laboratory;
        $agency = $this->agency;
        return Excel::download(new CustomerDiscount($month,$year,$lab,$agency), 'customerdiscount.xlsx');
    }

}
