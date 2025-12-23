<?php

namespace App\Services\Others\Accomplishment;

use Hashids\Hashids;
use App\Models\Target;
use App\Models\Tsr;
use App\Models\TsrSample;
use App\Models\TsrSampleReport;
use App\Models\TsrPayment;
use App\Models\TsrAnalysis;
use App\Models\Customer;
use App\Models\ListObjective;
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
            return $this->add($year,$agencies);
        }
    }

    public function view($year,$agencies){
        $data = Target::with('breakdowns.laboratory','breakdowns.objective.type')->where('year',$year)->where('agency_id',$this->agency)->first();
        $months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun','Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
        $breakdowns = $data->breakdowns;
        $grandtotal = 0;
        $grouped = $breakdowns->groupBy('objective_id')->map(function ($items) use ($months,$year,$grandtotal){
            $breakdown = []; $monthly = [];
            $monthly_all = [];
            foreach ($items as $item) {
                 $total = 0; 
                if($item->laboratory) {
                    $laboratory_id = $item->laboratory->id;
                    $monthly = [];
                    foreach($months as $index => $month){
                        $count = $this->count($item->objective->name,$index,$year,$month,$laboratory_id);
                        $total = $total + $count;
                        $monthly[] = [
                            'name' => $month,
                            'is_amount' => $items->first()['is_amount'],
                            'accomplish' => $count
                        ];

                        if (!isset($monthly_all[$index])) {
                            $monthly_all[$index] = [
                                'name' => $month,
                                'is_amount' => $items->first()['is_amount'],
                                'accomplish' => 0
                            ];
                        }
                        $monthly_all[$index]['accomplish'] += $count;
                    }
                    $grandtotal =$grandtotal + $total;
                    $breakdown[] = [
                        'name' => $item->laboratory->name,
                        'target' => $item->count,
                        'months' => $monthly,
                        'accomplish' => $total,
                        'percentage' => ($item->count == 0) ? '-' : round(($total / $item->count) * 100, 2) . '%' 
                    ];
                }else{
                    $monthly = [];
                    if($item->objective->name == 'Firms Assisted'){
                        foreach($months as $index => $month){
                            $count = $this->count($item->objective->name,null,$year,$month,null);
                            $total = $total + $count;
                            $monthly[] = [
                                'name' => $month,
                                'is_amount' => $items->first()['is_amount'],
                                'accomplish' => $count
                            ];

                            if (!isset($monthly_all[$index])) {
                                $monthly_all[$index] = [
                                    'name' => $month,
                                    'is_amount' => $items->first()['is_amount'],
                                    'accomplish' => 0
                                ];
                            }
                            $monthly_all[$index]['accomplish'] += $count;
                        }
                    }else{
                        foreach($months as $index => $month){
                            $count = $this->count($item->objective->name,null,$year,$month,null);
                            $total = $total + $count;
                            $monthly[] = [
                                'name' => $month,
                                'is_amount' => $items->first()['is_amount'],
                                'accomplish' => $count
                            ];

                            if (!isset($monthly_all[$index])) {
                                $monthly_all[$index] = [
                                    'name' => $month,
                                    'is_amount' => $items->first()['is_amount'],
                                    'accomplish' => 0
                                ];
                            }
                            $monthly_all[$index]['accomplish'] += $count;
                        }
                    }
                    $grandtotal =$grandtotal + $total;
                }
            }
            $result = [
                'name' => $items->first()->objective->name,
                'target' => $items->sum('count'),
                'is_consolidated' => $items->first()['is_consolidated'],
                'is_amount' => $items->first()['is_amount'],
                'accomplish' => $grandtotal,
                'percentage' => ($items->sum('count') == 0) ? '-' : round(($grandtotal / $items->sum('count')) * 100, 2) . '%',
                'breakdown' => $breakdown,
                'monthly' => array_values($monthly_all),
                'objective_type' => $items->first()->objective->type->name,
            ];
            return $result;
        })->groupBy(fn ($item) => $item['objective_type']);
        // return $grouped;
        return inertia('Modules/Others/Accomplishments/View',[
            'agencies' => $agencies,
            'agency' => $this->agency,
            'years' => $this->years(),
            'selected' => [
                'year' => $data->year,
                'kpis' =>$grouped
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
            $objectives = ListObjective::where('is_active',1)->get();
    
            foreach($objectives as $kpi){
                if(!$kpi->is_consolidated){
                    if($kpi->name == 'Firms Assisted'){
                        $breakdown = $data->breakdowns()->create([
                            'objective_id' => $kpi->id,
                            'count' => 0,
                            'accom' => 0,
                            'laboratory_id' => null,
                            'is_consolidated' => $kpi->is_consolidated,
                            'is_amount' => $kpi->is_amount
                        ]);
                        $breakdown = $data->breakdowns()->create([
                            'objective_id' => $kpi->id,
                            'count' => 0,
                            'accom' => 0,
                            'laboratory_id' => null,
                            'is_consolidated' => $kpi->is_consolidated,
                            'is_amount' => $kpi->is_amount
                        ]);
                    }else{
                        foreach($this->laboratories as $laboratory){
                            $breakdown = $data->breakdowns()->create([
                                'objective_id' => $kpi->id,
                                'count' => 0,
                                'accom' => 0,
                                'laboratory_id' => $laboratory['value'],
                                'is_consolidated' => $kpi->is_consolidated,
                                'is_amount' => $kpi->is_amount
                            ]);
                        }
                    }
                }else{
                    $breakdown = $data->breakdowns()->create([
                        'objective_id' => $kpi->id,
                        'count' => 0,
                        'accom' => 0,
                        'laboratory_id' => null,
                        'is_consolidated' => $kpi->is_consolidated,
                        'is_amount' => $kpi->is_amount
                    ]);
                }
            }

        }
    }

    public function count($name,$index,$year,$month,$laboratory_id){
        $months = [
            'Jan' => 1,
            'Feb' => 2,
            'Mar' => 3,
            'Apr' => 4,
            'May' => 5,
            'Jun' => 6,
            'Jul' => 7,
            'Aug' => 8,
            'Sep' => 9,
            'Oct' => 10,
            'Nov' => 11,
            'Dec' => 12,
        ];

        switch($name){
            case 'Samples Received':
                $count = TsrSample::whereMonth('created_at',$index+1)->whereYear('created_at',$year)->whereHas('tsr', function ($query) use ($laboratory_id){
                    $query->where('agency_id',$this->agency)->where('laboratory_id',$laboratory_id)->where('status_id','!=',5);
                })->count();
            break;
            case 'Services Conducted':
                $count = TsrAnalysis::whereHas('sample', function ($query) use ($laboratory_id,$year,$index){
                    $query->where('status_id','!=',13);
                    $query->whereHas('tsr', function ($query) use ($laboratory_id,$year,$index){
                        $query->where('agency_id',$this->agency)->where('laboratory_id',$laboratory_id)->where('status_id','!=',5)->where('is_shelf',0)->whereMonth('created_at',$index+1)->whereYear('created_at',$year);
                    });
                })
                ->count();
            break;
            case 'Customers Served':
                $count = Tsr::where('status_id','!=',5)->whereMonth('created_at',$index+1)->whereYear('created_at',$year)->where('laboratory_id',$laboratory_id)->where('agency_id',$this->agency)->count();
            break;
            case 'New Customers Served':
                // $count = Tsr::whereHas('customer', function ($query) use ($index,$year){
                //     $query->where('is_new',1)->whereMonth('created_at',$index+1)->whereYear('created_at',$year);
                // })
                // ->where('agency_id',$this->agency)->select('customer_id')->distinct()->count('customer_id');
                // $m = $months[$month] ?? null;
                // $count = Customer::where('is_new', true)
                // ->whereMonth('created_at', $m)
                // ->whereYear('created_at', $year)
                // ->whereHas('tsrs', function ($query){
                //     $query->where('agency_id', $this->agency);
                // })
                // ->count();
                $m = $months[$month] ?? null;
                $count = Customer::query()
                ->where('customers.is_new', true)
                ->joinSub(
                    \DB::table('tsrs')
                        ->select('customer_id', \DB::raw('MIN(created_at) as first_tsr_date'))
                        ->where('agency_id', $this->agency)
                        ->where('status_id', '!=', 5) // 🚫 exclude cancelled
                        ->groupBy('customer_id'),
                    'first_tsrs',
                    'first_tsrs.customer_id',
                    '=',
                    'customers.id'
                )
                ->whereMonth('first_tsrs.first_tsr_date', $m)
                ->whereYear('first_tsrs.first_tsr_date', $year)
                ->count();
            break;
            case 'Firms Served':
                $m = $months[$month] ?? null;
                $count = Tsr::whereHas('customer', function ($query) use ($m,$year){
                    $query->whereMonth('created_at',$m)->whereYear('created_at',$year)->where('classification_id',8);
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
            case 'Values of Assistance Rendered':
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
            case 'Paying Testing/Calibration Services Provided':
                $count = TsrAnalysis::whereHas('sample', function ($query) use ($laboratory_id,$index,$year){
                    $query->whereHas('tsr', function ($query) use ($laboratory_id,$index,$year){
                        $query->withWhereHas('payment', function ($query) {
                            $query->where('is_free',0);
                        });
                        $query->where('agency_id',$this->agency)->where('laboratory_id',$laboratory_id)->where('status_id','!=',5)->where('is_shelf',0);
                        $query->whereMonth('created_at',$index+1)->whereYear('created_at',$year);
                    });
                })
                ->count();
            break;
            case 'Non-Paying Testing/Calibration Services Provided':
                $count = TsrAnalysis::whereHas('sample', function ($query) use ($laboratory_id,$index,$year){
                    $query->whereHas('tsr', function ($query) use ($laboratory_id,$index,$year){
                        $query->withWhereHas('payment', function ($query) {
                            $query->where('is_free',1);
                        });
                        $query->where('agency_id',$this->agency)->where('laboratory_id',$laboratory_id)->where('status_id','!=',5)->where('is_shelf',0);
                        $query->whereMonth('created_at',$index+1)->whereYear('created_at',$year);
                    });
                })
                ->count();
            break;
            case 'Amount of Testing and Calibration Fees Collected':
                $amount = Tsr::whereDoesntHave('parent')
                ->withWhereHas('payment', function ($query) {
                    $query->where('is_free',0);
                })
                ->where('status_id','!=',5)
                ->whereMonth('created_at',$index+1)->whereYear('created_at',$year)
                ->where('agency_id',$this->agency)
                ->get()
                ->sum(function ($tsr) {
                    return str_replace(['₱ ', '₱', ',', ' '], '', $tsr->payment->total);
                });
                $discount = Tsr::whereDoesntHave('parent')
                ->withWhereHas('payment', function ($query) {
                    $query->where('is_free',0);
                })
                ->where('status_id','!=',5)
                ->whereMonth('created_at',$index+1)->whereYear('created_at',$year)
                ->where('agency_id',$this->agency)
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
                ->where('agency_id',$this->agency)
                ->get()
                ->sum(function ($tsr) {
                    return str_replace(['₱ ', '₱', ',', ' '], '', $tsr->payment->discount);
                });

                $count = $gratis + $discount + $amount;

            break;
            case 'Ensure 99% of Test and Calibration Reports are ready on time':
                $count = 0;
            break;
            case 'Maintain 100% accuracy in all Test and Calibration Reports':
                $count = 0;
            break;
            case 'Firms Assisted':
                $i = 0;
                if($i == 0){
                    $count = Tsr::whereDoesntHave('parent')
                    ->withWhereHas('payment', function ($query) {
                        $query->where('is_free',0);
                    })
                    ->whereHas('customer', function ($query){
                         $query->where('classification_id',8);
                    })
                    ->where('status_id','!=',5)
                    ->whereMonth('created_at',$index+1)->whereYear('created_at',$year)
                    ->where('laboratory_id',$laboratory_id)->where('agency_id',$this->agency)
                    ->get()
                    ->sum(function ($tsr) {
                        return str_replace(['₱ ', '₱', ',', ' '], '', $tsr->payment->total);
                    });
                }else{
                    $count = Tsr::whereDoesntHave('parent')
                    ->withWhereHas('payment', function ($query) {
                        $query->where('is_free',0);
                    })
                    ->whereHas('customer', function ($query){
                         $query->where('classification_id',8);
                    })
                    ->where('status_id','!=',5)
                    ->whereMonth('created_at',$index+1)->whereYear('created_at',$year)
                    ->where('laboratory_id',$laboratory_id)->where('agency_id',$this->agency)
                    ->get()
                    ->sum(function ($tsr) {
                        return str_replace(['₱ ', '₱', ',', ' '], '', $tsr->payment->total);
                    });
                }
                $i++;
            break;
            case 'Number of Reports Generated ':
                $count = TsrSampleReport::whereMonth('created_at',$index+1)->whereYear('created_at',$year)
                ->whereHas('sample', function ($query) use ($laboratory_id){
                    $query->whereHas('tsr', function ($query) use ($laboratory_id) {
                        $query->where('laboratory_id',$laboratory_id)->where('agency_id',$this->agency)->where('status_id','!=',5);
                    });
                })
                ->count();
            break;
            default: 
            $count = 0;
        }
        return $count;
    }

    public function years(){
        return Target::distinct()->pluck('year');
    }
}
