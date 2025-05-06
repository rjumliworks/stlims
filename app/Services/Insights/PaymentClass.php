<?php

namespace App\Services\Insights;

use App\Models\TsrPayment;
use App\Models\ListStatus;
use App\Models\ListDropdown;
use App\Models\ListDiscount;
use App\Http\Resources\DefaultResource;

class PaymentClass
{
    public function __construct()
    {   
        $this->agency = (count(\Auth::user()->myroles) > 0) ? \Auth::user()->myroles[0]->agency_id : null;
    }

    public function chart($request){
        $year = ($request->year) ? $request->year : date('Y') ;
        $laboratory = $request->laboratory;
        $months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];

        $first = []; 
        for($month = 1; $month <= 12; $month++){
            $count = TsrPayment::whereHas('tsr', function ($query) use ($laboratory,$year,$month){
                $query->where('agency_id', $this->agency)->where('status_id','!=',5);
                $query->when($laboratory, function ($query, $laboratory) {
                    $query->where('laboratory_id',$laboratory);
                });
                $query->whereYear('created_at',$year)->whereMonth('created_at',$month);
            })->where('status_id',7)->where('is_paid',1)->where('is_child',0)->sum('total');
            $first[] = $count;
        }
        $second = [];
        for($month = 1; $month <= 12; $month++){
            $count = TsrPayment::whereHas('tsr', function ($query) use ($laboratory,$year,$month){
                $query->where('agency_id', $this->agency)->where('status_id','!=',5);
                $query->when($laboratory, function ($query, $laboratory) {
                    $query->where('laboratory_id',$laboratory);
                });
                $query->whereYear('created_at',$year)->whereMonth('created_at',$month);
            })->whereIn('status_id',[6,18])->where('is_paid',0)->where('is_child',0)->sum('total');
            $second[] = $count;
        }
        $third = [];
        for($month = 1; $month <= 12; $month++){
            $count = TsrPayment::whereHas('tsr', function ($query) use ($laboratory,$year,$month){
                $query->where('agency_id', $this->agency)->where('status_id','!=',5);
                $query->when($laboratory, function ($query, $laboratory) {
                    $query->where('laboratory_id',$laboratory);
                });
                $query->whereYear('created_at',$year)->whereMonth('created_at',$month);
            })->where('status_id',8)->where('is_free',1)->where('is_child',0)->sum('discount');
            $third[] = $count;
        }

        $arr = [
            [
                'name' => 'Collected Amount',
                'data' => $first
            ],
            [
                'name' => 'Uncollected Amount', 
                'data' => $second
            ],
            [
                'name' => 'Complimentary Service Amount', 
                'data' => $third
            ]
        ];
        
        return $y =[
            'categories' => $months,
            'lists' => $arr,
        ];
    }

    public function info($request){
        $sort = ($request->sort) ? $request->sort : 'desc';
        $year = $request->year;
        $month = $request->month;
        $laboratory = $request->laboratory;

        return [
            [
                'name' => 'Collected Amount (Receipted)',
                'description' => ' Total amount successfully collected and receipted',
                'total' => TsrPayment::whereHas('tsr', function ($query) use ($laboratory,$month,$year){
                    $query->where('agency_id', $this->agency)->where('status_id','!=',5);
                    $query->when($laboratory, function ($query, $laboratory) {
                        $query->where('laboratory_id',$laboratory);
                    });
                    ($year) ? $query->whereYear('created_at',$year) : '';
                    ($month) ? $query->whereMonth('created_at',$month) : '';
                })->where('status_id',7)->where('is_paid',1)->where('is_child',0)->sum('total'),
                'icon' => 'ri-checkbox-circle-fill fs-20',
                'color' => 'text-success'
            ],
            [
                'name' => 'Uncollected Amount',
                'description' => 'Total pending payments not yet received',
                'total' => TsrPayment::whereHas('tsr', function ($query) use ($laboratory,$year,$month){
                    $query->where('agency_id', $this->agency)->where('status_id','!=',5);
                    $query->when($laboratory, function ($query, $laboratory) {
                        $query->where('laboratory_id',$laboratory);
                    });
                    ($year) ? $query->whereYear('created_at',$year) : '';
                    ($month) ? $query->whereMonth('created_at',$month) : '';
                })->whereIn('status_id',[6,18])->where('is_paid',0)->where('is_child',0)->sum('total'),
                'icon' => 'ri-close-circle-fill fs-20',
                'color' => 'text-danger'
            ],
            [
                'name' => 'Total Transaction Value',
                'description' => 'Total monetary value of all transactions',
                'total' => TsrPayment::whereHas('tsr', function ($query) use ($laboratory,$year,$month){
                    $query->where('agency_id', $this->agency)->where('status_id','!=',5);
                    $query->when($laboratory, function ($query, $laboratory) {
                        $query->where('laboratory_id',$laboratory);
                    });
                    ($year) ? $query->whereYear('created_at',$year) : '';
                    ($month) ? $query->whereMonth('created_at',$month) : '';
                })->whereIn('status_id',[6,7,18])->where('is_child',0)->sum('total'),
                'icon' => 'ri-radio-button-fill fs-20',
                'color' => 'text-primary'
            ]
        ];
    }

    public function info2($request){
        $sort = ($request->sort) ? $request->sort : 'desc';
        $year = $request->year;
        $month = $request->month;
        $laboratory = $request->laboratory;

        return [
            [
                'name' => 'Complimentary Service Amount',
                'description' => 'Total value of services provided free of charge.',
                'total' => TsrPayment::whereHas('tsr', function ($query) use ($laboratory,$year,$month){
                    $query->where('agency_id', $this->agency)->where('status_id','!=',5);
                    $query->when($laboratory, function ($query, $laboratory) {
                        $query->where('laboratory_id',$laboratory);
                    });
                    ($year) ? $query->whereYear('created_at',$year) : '';
                    ($month) ? $query->whereMonth('created_at',$month) : '';
                })->where('status_id',8)->where('is_free',1)->where('is_child',0)->sum('discount'),
                'icon' => 'ri-hearts-fill fs-20',
                'color' => 'text-warning'
            ],
            [
                'name' => 'Aggregate Collection Value',
                'description' => 'Total collected, payments and complimentary services.',
                'total' => TsrPayment::whereHas('tsr', function ($query) use ($laboratory,$year,$month) {
                    $query->where('agency_id', $this->agency)->where('status_id','!=',5);
                    $query->when($laboratory, function ($query, $laboratory) {
                        $query->where('laboratory_id',$laboratory);
                    });
                    ($year) ? $query->whereYear('created_at',$year) : '';
                    ($month) ? $query->whereMonth('created_at',$month) : '';
                })->whereIn('status_id',[6,7,18])->where('is_child',0)->sum('total') + TsrPayment::whereHas('tsr', function ($query) use ($laboratory,$year,$month){
                    $query->where('agency_id', $this->agency)->where('status_id','!=',5);
                    $query->when($laboratory, function ($query, $laboratory) {
                        $query->where('laboratory_id',$laboratory);
                    });
                    ($year) ? $query->whereYear('created_at',$year) : '';
                    ($month) ? $query->whereMonth('created_at',$month) : '';
                })->where('status_id',8)->where('is_free',1)->where('is_child',0)->sum('discount'),
                'icon' => 'ri-medal-fill fs-20',
                'color' => 'text-info'
            ]
        ];
    }

    public function discounts($request){
        $sort = ($request->sort) ? $request->sort : 'desc';
        $year = $request->year;
        $month = $request->month;
        $laboratory = $request->laboratory;
  
        $query = ListDiscount::query()->select('id','name');
        $query->withCount(['payment' => function ($query) use ($year,$month,$laboratory){
            $query->where('is_child',0);
            $query->whereHas('tsr',function ($query) use ($year,$month,$laboratory) {
                $query->where('agency_id', $this->agency)->whereIn('status_id',[1,2,3,4]);
                ($laboratory) ? $query->where('laboratory_id',$laboratory) : ''; 
                ($year) ? $query->whereYear('created_at',$year) : '';
                ($month) ? $query->whereMonth('created_at',$month) : '';
            });
        }])
        ->orderBy('payment_count', $sort);
        $data = $query->get();
        return DefaultResource::collection($data);
    }

    public function statuses($request){
        $sort = ($request->sort) ? $request->sort : 'desc';
        $year = $request->year;
        $month = $request->month;
        $laboratory = $request->laboratory;
  
        $query = ListStatus::query()->where('type','Payment')->select('id','name');
        $query->withCount(['payment' => function ($query) use ($year,$month,$laboratory){
            $query->where('is_child',0);
            $query->whereHas('tsr',function ($query) use ($year,$month,$laboratory) {
                $query->where('agency_id', $this->agency)->whereIn('status_id',[1,2,3,4]);
                ($laboratory) ? $query->where('laboratory_id',$laboratory) : ''; 
                ($year) ? $query->whereYear('created_at',$year) : '';
                ($month) ? $query->whereMonth('created_at',$month) : '';
            });
        }])
        ->orderBy('payment_count', $sort);
        $data = $query->get();
        return DefaultResource::collection($data);
    }

    public function methods($request){
        $sort = ($request->sort) ? $request->sort : 'desc';
        $year = $request->year;
        $month = $request->month;
        $laboratory = $request->laboratory;
  
        $query = ListDropdown::query()->where('classification','Payment Mode')->select('id','name');
        $query->withCount(['payment' => function ($query) use ($year,$month,$laboratory){
            $query->where('is_child',0);
            $query->whereHas('tsr',function ($query) use ($year,$month,$laboratory) {
                $query->where('agency_id', $this->agency)->whereIn('status_id',[1,2,3,4]);
                ($laboratory) ? $query->where('laboratory_id',$laboratory) : ''; 
                ($year) ? $query->whereYear('created_at',$year) : '';
                ($month) ? $query->whereMonth('created_at',$month) : '';
            });
        }])
        ->orderBy('payment_count', $sort);
        $data = $query->get();
        return DefaultResource::collection($data);
    }
}
