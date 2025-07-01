<?php

namespace App\Services\Others\Accomplishment;

use Hashids\Hashids;
use App\Models\Target;
use App\Models\Tsr;
use App\Models\TsrSample;
use App\Models\TsrPayment;
use App\Models\TsrAnalysis;
use App\Models\AgencyConfiguration;

class ViewClass
{
    public function __construct()
    {
        $this->agency = (count(\Auth::user()->myroles)>0) ? \Auth::user()->myroles[0]->agency_id : null;
        $this->laboratories =(\Auth::check()) ? (\Auth::user()->role == 'Administrator') ? [] : AgencyConfiguration::where('agency_id',$this->agency)->value('laboratories') : '';
    }

    public function show($request,$agencies){
        $year = date('Y');
        $data = Target::with('breakdowns.laboratory')->where('year',$year)->where('agency_id',$this->agency)->first();
        if($data){
           return $this->view($year,$agencies);
        }else{
            $this->add($year,$agencies);
        }
    }

    public function view($year,$agencies){
        $data = Target::with('breakdowns.laboratory')->where('year',$year)->where('agency_id',$this->agency)->first();
        $percentageCounts = [0,0,0,0];
        $months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun','Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
        $breakdowns = $data->breakdowns;
        $grouped = $breakdowns->groupBy('name')->map(function ($items) use ($months, &$percentageCounts,$year){
            $monthly = []; $total = 0;
            foreach($months as $index => $month){

                switch($items->first()['name']){
                    case 'Samples Received':
                        $count = TsrSample::whereMonth('created_at',$index+1)->whereYear('created_at',$year)->whereHas('tsr', function ($query){
                            $query->where('agency_id',$this->agency);
                        })->count();
                    break;
                    case 'Services Conducted':
                        $count = TsrAnalysis::whereMonth('created_at',$index+1)->whereYear('created_at',$year)->whereHas('sample', function ($query){
                            $query->whereHas('tsr', function ($query){
                                $query->where('agency_id',$this->agency);
                            });
                        })
                       ->count();
                    break;
                    case 'Customers Served':
                        $count = Tsr::whereMonth('created_at',$index+1)->whereYear('created_at',$year)->count();
                    break;
                    case 'New Customers Served':
                        $count = Tsr::whereHas('customer', function ($query) use ($index,$year){
                            $query->whereMonth('created_at',$index+1)->whereYear('created_at',$year);
                        })
                        ->where('agency_id',$this->agency)->count();
                    break;
                    case 'Firms Served':
                        $count = Tsr::whereHas('customer', function ($query) use ($index,$year){
                            $query->whereMonth('created_at',$index+1)->whereYear('created_at',$year)->where('classification_id',8);
                        })
                        ->where('agency_id',$this->agency)->count();
                    break;
                    case 'Actual Fees Collected':
                        $count = TsrPayment::whereMonth('paid_at',$index+1)->whereYear('paid_at',$year)->where('is_paid',1)
                        ->whereHas('tsr', function ($query){
                            $query->where('agency_id',$this->agency);
                        })
                       ->sum('total');
                    break;
                    case 'Value of Assistance Rendered':
                        $count = TsrPayment::whereMonth('paid_at',$index+1)->whereYear('paid_at',$year)->where('is_free',1)
                        ->whereHas('tsr', function ($query){
                            $query->where('agency_id',$this->agency);
                        })
                       ->sum('discount');
                    break;
                    case 'New Services Offered':
                        $count = 0;
                    break;
                    case 'Weaned Out Services':
                        $count = 0;
                    break;
                    default: 
                    $count = 0;
                }
                $monthly[] = [
                    'name' => $month,
                    'is_amount' => $items->first()['is_amount'],
                    'count' => $count
                ];
                $total = $total + $count;
            }

            $target = $items->sum('count');
            $percentage = ($target > 0) ? ($total / $target) * 100 : 0;

            if ($percentage < 50) {
                $percentageCounts[0]++;
            } elseif ($percentage >= 50 && $percentage < 100) {
                $percentageCounts[1]++;
            } elseif ($percentage >= 100) {
                $percentageCounts[2]++;
            }

            $result = [
                'name' => $items->first()['name'],
                'target' => $items->sum('count'),
                'accom' => $total,
                'percentage' => $percentage,
                'is_consolidated' => $items->first()['is_consolidated'],
                'is_amount' => $items->first()['is_amount'],
                'breakdowns' => $items,
                'months' => $monthly,
            ];
            $percentageCounts[3] =  number_format($percentageCounts[3] + $percentage,2);
            return $result;
        });

        return inertia('Modules/Others/Accomplishments/View',[
            'agencies' => $agencies,
            'agency' => $this->agency,
            'selected' => [
                'year' => $data->year,
                'kpis' =>$grouped,
                'counts' => $percentageCounts
            ]
        ]);
    }

    public function add($year,$agencies){
        $data = Target::create([
            'year' => $year,
            'data' => json_encode([]),
            'agency_id' => $this->agency,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        if($data){
            $kpis = [
                ['name' => 'Samples Received','is_consolidated' => 0, 'is_amount' => 0],
                ['name' => 'Services Conducted','is_consolidated' => 0, 'is_amount' => 0],
                ['name' => 'Customers Served','is_consolidated' => 0, 'is_amount' => 0],
                ['name' => 'New Customers Served','is_consolidated' => 1, 'is_amount' => 0],
                ['name' => 'Firms Served','is_consolidated' => 1, 'is_amount' => 0],
                ['name' => 'Actual Fees Collected','is_consolidated' => 0, 'is_amount' => 1],
                ['name' => 'Value of Assistance Rendered','is_consolidated' => 0, 'is_amount' => 1],
                ['name' => 'New Services Offered','is_consolidated' => 1, 'is_amount' => 0],
                ['name' => 'Weaned Out Services','is_consolidated' => 1, 'is_amount' => 0]
            ];
            
            foreach($kpis as $kpi){
                if(!$kpi['is_consolidated']){
                    foreach($this->laboratories as $laboratory){
                        $breakdown = $data->breakdowns()->create([
                            'name' => $kpi['name'],
                            'count' => 0,
                            'accom' => 0,
                            'laboratory_id' => $laboratory['value'],
                            'is_consolidated' => $kpi['is_consolidated'],
                            'is_amount' => $kpi['is_amount']
                        ]);
                    }
                }else{
                    $breakdown = $data->breakdowns()->create([
                        'name' => $kpi['name'],
                        'count' => 0,
                        'accom' => 0,
                        'laboratory_id' => null,
                        'is_consolidated' => $kpi['is_consolidated'],
                        'is_amount' => $kpi['is_amount']
                    ]);
                }
            }

            return $this->view($year,$agencies);
        }
    }
}
