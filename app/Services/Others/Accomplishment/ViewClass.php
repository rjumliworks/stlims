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
        $grouped = $breakdowns->groupBy('name')->map(function ($items) use ($months,&$percentageCounts,$year){
            $breakdown = []; $monthly = []; $total = 0; $grandtotal = 0;
            $monthly_all = [];
            foreach ($items as $item) {
                if ($item->laboratory) {
                    $laboratory_id = $item->laboratory->id;
                     $monthly = [];
                    foreach($months as $index => $month){
                        switch($item->name){
                            case 'Samples Received':
                                $count = TsrSample::whereMonth('created_at',$index+1)->whereYear('created_at',$year)->whereHas('tsr', function ($query) use ($laboratory_id){
                                    $query->where('agency_id',$this->agency)->where('laboratory_id',$laboratory_id)->where('status_id','!=',5);
                                })->count();
                            break;
                            case 'Services Conducted':
                                $count = TsrAnalysis::whereMonth('created_at',$index+1)->whereYear('created_at',$year)->whereHas('sample', function ($query) use ($laboratory_id){
                                    $query->whereHas('tsr', function ($query) use ($laboratory_id){
                                        $query->where('agency_id',$this->agency)->where('laboratory_id',$laboratory_id)->where('status_id','!=',5)->where('is_shelf',0);
                                    });
                                })
                                ->count();
                            break;
                            case 'Customers Served':
                                $count = Tsr::where('status_id','!=',5)->whereMonth('created_at',$index+1)->whereYear('created_at',$year)->where('laboratory_id',$laboratory_id)->where('agency_id',$this->agency)->count();
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
                                $count = Tsr::whereDoesntHave('parent')
                                ->withWhereHas('payment', function ($query) {
                                    $query->where('is_free',0);
                                })
                                ->where('status_id','!=',5)
                                ->whereMonth('created_at',$index+1)->whereYear('created_at',$year)
                                ->where('laboratory_id',$laboratory_id)->where('agency_id',$this->agency)
                                ->get()
                                ->sum(function ($tsr) {
                                    return str_replace(['₱ ', '₱', ',', ' '], '', $tsr->payment->total);
                                });
                            break;
                            case 'Value of Assistance Rendered':
                                $discount = Tsr::whereDoesntHave('parent')
                                ->withWhereHas('payment', function ($query) {
                                    $query->where('is_free',0);
                                })
                                ->where('status_id','!=',5)
                                ->whereMonth('created_at',$index+1)->whereYear('created_at',$year)
                                ->where('laboratory_id',$laboratory_id)->where('agency_id',$this->agency)
                                ->get()
                                ->sum(function ($tsr) {
                                    return str_replace(['₱ ', '₱', ',', ' '], '', $tsr->payment->discount);
                                });

                                $gratis = Tsr::whereDoesntHave('parent')
                                ->withWhereHas('payment', function ($query) {
                                    $query->where('is_free',1);
                                })
                                ->where('status_id','!=',5)
                                ->whereMonth('created_at',$index+1)->whereYear('created_at',$year)
                                ->where('laboratory_id',$laboratory_id)->where('agency_id',$this->agency)
                                ->get()
                                ->sum(function ($tsr) {
                                    return str_replace(['₱ ', '₱', ',', ' '], '', $tsr->payment->discount);
                                });

                                $count = $gratis + $discount;
                            break;
                            case 'Number of Testing and Calibration Services Provided (Paying)':
                                $count = TsrAnalysis::whereHas('sample', function ($query) use ($laboratory_id,$index,$year){
                                    $query->whereHas('tsr', function ($query) use ($laboratory_id,$index,$year){
                                        $query->where('status_id','!=',5);
                                        $query->whereDoesntHave('parent')->withWhereHas('payment', function ($query) {
                                            $query->where('is_free',0);
                                        });
                                        $query->where('agency_id',$this->agency)->where('laboratory_id',$laboratory_id);
                                        $query->whereMonth('created_at',$index+1)->whereYear('created_at',$year);
                                    });
                                })
                                ->count();
                            break;
                            case 'Number of Testing and Calibration Services Provided (Gratis)':
                                $count = TsrAnalysis::whereHas('sample', function ($query) use ($laboratory_id,$index,$year){
                                    $query->whereHas('tsr', function ($query) use ($laboratory_id,$index,$year){
                                        $query->where('status_id','!=',5);
                                        $query->whereDoesntHave('parent')->withWhereHas('payment', function ($query) {
                                            $query->where('is_free',1);
                                        });
                                        $query->where('agency_id',$this->agency)->where('laboratory_id',$laboratory_id);
                                        $query->whereMonth('created_at',$index+1)->whereYear('created_at',$year);
                                    });
                                })
                                ->count();
                            break;
                            default: 
                            $count = 0;
                        }
                        $total = $total + $count;
                        $monthly[] = [
                            'name' => $month,
                            'is_amount' => $items->first()['is_amount'],
                            'accomplish' => $count
                        ];
                    }
                    $grandtotal =$grandtotal + $total;
                    $breakdown[] = [
                        'name' => $item->laboratory->name,
                        'target' => $item->count,
                        'months' => $monthly,
                        'accomplish' => $total
                    ];
                }else{
                    $breakdown = null;
                }
            }
            $result = [
                'name' => $items->first()['name'],
                'target' => $items->sum('count'),
                'is_consolidated' => $items->first()['is_consolidated'],
                'is_amount' => $items->first()['is_amount'],
                'accomplish' => $grandtotal,
                'breakdown' => $breakdown,
                'monthly' => $monthly_all
            ];
            return $result;
        });
        return $grouped;
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
                ['name' => 'Number of Reports Generated','is_consolidated' => 0, 'is_amount' => 0],
                ['name' => 'Number of Late Reports','is_consolidated' => 0, 'is_amount' => 0],
                ['name' => 'Number of Innacurate','is_consolidated' => 0, 'is_amount' => 0],
                ['name' => 'Number of Testing and Calibration Services Provided (Paying)','is_consolidated' => 0, 'is_amount' => 0],
                ['name' => 'Number of Testing and Calibration Services Provided (Gratis)','is_consolidated' => 0, 'is_amount' => 0],
                ['name' => '% of Testing / Calibration Services Delivered withing Agreed Time','is_consolidated' => 1, 'is_amount' => 0],
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
