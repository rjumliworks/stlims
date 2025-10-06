<?php

namespace App\Services\Dashboard;

use App\Models\Tsr;
use App\Models\TsrPayment;
use App\Models\ListLaboratory;
use App\Http\Resources\Laboratory\Tsr\TopResource;

class TopClass
{
    public function __construct()
    {
        $this->agency = (\Auth::check()) ? (count(\Auth::user()->myroles) > 0) ? \Auth::user()->myroles[0]->agency_id : null : '';
        $this->start = now()->copy()->startOfMonth()->format('Y-m-d');
        $this->end = now()->copy()->endOfMonth()->format('Y-m-d');
    }

    public function lists($request){
        $data = TopResource::collection(
            Tsr::query()
            ->with('customer:id,name_id,name,is_main','customer.customer_name:id,name,has_branches')
            ->with('laboratory:id,name','status:id,name,color,others')
            ->with('payment:tsr_id,id,total,is_paid,is_free,paid_at,status_id,discount_id,collection_id,payment_id','payment.status:id,name,color,others')
            ->when($request->keyword, function ($query, $keyword) {
                $query->where('code', 'LIKE', "%{$keyword}%")
                ->orWhereHas('customer',function ($query) use ($keyword) {
                    $query->where('name', 'LIKE', "%{$keyword}%")
                    ->orWhereHas('customer_name',function ($query) use ($keyword) {
                        $query->where('name', 'LIKE', "%{$keyword}%");
                    });
                });
                
            })
            ->when(true, function ($query) use ($request) {
                $type = $request->type ?? null;
                switch($type){
                    case 'Collected Amount':
                        $query->where('status_id','!=',5);
                        $query->whereHas('payment',function ($query){
                             $query->where('status_id', 7);
                        });
                    break;
                    case 'Uncollected Amount':
                        $query->where('status_id','!=',5);
                        $query->whereHas('payment',function ($query){
                            $query->whereIn('status_id',[6,18]);
                        });
                    break;
                    default:
                        $query->where('status_id','!=',5);
                        $query->whereHas('payment',function ($query){
                             $query->whereIn('status_id', [6,7,18]);
                        });
                }
            }) 
            ->when($request->laboratory , function ($query, $labtype) {
                $query->where('laboratory_id',$labtype);
            }) 
            ->when($this->agency, function ($query,$agency) {
                $query->where('agency_id',$agency);
            })
            ->paginate($request->count)
        );
        return $data;
    }

    public function info($request){
        return [
            'year' => date('Y'),
            'laboratories' => ListLaboratory::get()->map(function ($item) {
                return [
                    'value' => $item->id,
                    'name' => $item->name
                ];
            })
        ];
    }

    public function counts($request){
        return [
            $this->collected($request),
            $this->uncollected($request),
            $this->total($request),
        ];
    }

    public function collected($request){
        $year = $request->year ?? now()->year;
        $month = $request->month;
        $laboratory = $request->laboratory;
        $series = [];

        $data = Tsr::select(
            \DB::raw('MONTH(tsrs.created_at) AS month'),
            \DB::raw('SUM(tsr_payments.total) AS y')
        )
        ->when($request->laboratory , function ($query, $labtype) {
            $query->where('laboratory_id',$labtype);
        }) 
        ->where('tsrs.status_id','!=',5)
        ->leftJoin('tsr_payments', 'tsrs.id', '=', 'tsr_payments.tsr_id')
        ->where('tsrs.agency_id', $this->agency)
        ->where('tsr_payments.status_id', 7)
        ->whereYear('tsrs.created_at', $year)
        ->groupBy(\DB::raw('MONTH(tsrs.created_at)'))
        ->orderBy(\DB::raw('MONTH(tsrs.created_at)'))
        ->get()
        ->map(function ($item) {
            return [
                'x' => date('F', mktime(0, 0, 0, $item->month, 1)),
                'y' => (float) $item->y
            ];
        });

        $info = [
            'name' => 'Collected Amount',
            'data' => $data
        ];
        array_push($series,$info);
       
        $info = [
            'series' => $series,
            'total' => TsrPayment::whereHas('tsr', function ($query) use ($laboratory,$month,$year){
                    $query->where('agency_id', $this->agency)->where('status_id','!=',5);
                    $query->when($laboratory, function ($query, $laboratory) {
                        $query->where('laboratory_id',$laboratory);
                    });
                    ($year) ? $query->whereYear('created_at',$year) : '';
                    ($month) ? $query->whereMonth('created_at',$month) : '';
                })->where('status_id',7)->where('is_paid',1)->where('is_child',0)->sum('total')
        ];
        
        return $arr = [
            'name' => 'Collected Amount',
            'icon' => 'ri-checkbox-circle-fill',
            'color' => 'text-success',
            'info' => $info
        ];
    }

    public function uncollected($request){
        $year = $request->year ?? now()->year;
        $month = $request->month;
        $laboratory = $request->laboratory;
        $series = [];

        $data = Tsr::select(
            \DB::raw('MONTH(tsrs.created_at) AS month'),
            \DB::raw('SUM(tsr_payments.total) AS y')
        )
        ->leftJoin('tsr_payments', 'tsrs.id', '=', 'tsr_payments.tsr_id')
        ->when($request->laboratory , function ($query, $labtype) {
            $query->where('laboratory_id',$labtype);
        }) 
        ->where('agency_id', $this->agency)
        ->where('tsrs.status_id','!=',5)
        ->whereIn('tsr_payments.status_id', [6,18])
        ->whereYear('tsrs.created_at', $year)
        ->groupBy(\DB::raw('MONTH(tsrs.created_at)'))
        ->orderBy(\DB::raw('MONTH(tsrs.created_at)'))
        ->get()->map(function ($item) {
            return [
                 'x' => date('F', mktime(0, 0, 0, $item->month, 1)),
                'y' => $item->y
            ];
        });
        $info = [
            'name' => 'Uncollected Amount',
            'data' => $data
        ];
        array_push($series,$info);
        $info = [
            'series' => $series,
            'total' => TsrPayment::whereHas('tsr', function ($query) use ($laboratory,$year,$month){
                    $query->where('agency_id', $this->agency)->where('status_id','!=',5);
                    $query->when($laboratory, function ($query, $laboratory) {
                        $query->where('laboratory_id',$laboratory);
                    });
                    ($year) ? $query->whereYear('created_at',$year) : '';
                    ($month) ? $query->whereMonth('created_at',$month) : '';
                })->whereIn('status_id',[6,18])->where('is_paid',0)->where('is_child',0)->sum('total'),
        ];
        
        return $arr = [
            'name' => 'Uncollected Amount',
            'icon' => 'ri-close-circle-fill',
            'color' => 'text-danger',
            'info' => $info
        ];
    }   

    public function total($request){
        $year = $request->year ?? now()->year;
        $month = $request->month;
        $laboratory = $request->laboratory;
        $series = [];
        
        $data = Tsr::select(\DB::raw('DATE(created_at) AS x'), \DB::raw('count(*) AS y'))
        ->where('agency_id', $this->agency)
         ->when($request->laboratory , function ($query, $labtype) {
                $query->where('laboratory_id',$labtype);
            }) 
        ->whereIn('status_id',[1,2,3,4])
        ->whereBetween('created_at', [$this->start, $this->end])
        ->groupBy(\DB::raw('DATE(created_at)'))
        ->orderBy(\DB::raw('DATE(created_at)'))
        ->get()->map(function ($item) {
            return [
                'x' => date('F d, Y',strtotime($item->x)),
                'y' => $item->y
            ];
        });
        $info = [
            'name' => 'Total Transaction Value',
            'data' => []
        ];
        array_push($series,$info);
    
        $info = [
            'series' => $series,
            'total' => TsrPayment::whereHas('tsr', function ($query) use ($laboratory,$year,$month){
                    $query->where('agency_id', $this->agency)->where('status_id','!=',5);
                    $query->when($laboratory, function ($query, $laboratory) {
                        $query->where('laboratory_id',$laboratory);
                    });
                    ($year) ? $query->whereYear('created_at',$year) : '';
                    ($month) ? $query->whereMonth('created_at',$month) : '';
                })->whereIn('status_id',[6,7,18])->where('is_child',0)->sum('total')
        ];
        
        return $arr = [
            'name' => 'Total Transaction Value',
            'icon' => 'ri-hand-coin-fill',
            'color' => '',
            'info' => $info
        ];
    }
}
