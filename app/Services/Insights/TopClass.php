<?php

namespace App\Services\Insights;

use App\Models\Target;
use App\Models\TsrSample;
use App\Models\TsrAnalysis;
use App\Models\Customer;
use App\Models\AgencyConfiguration;
use App\Models\ListLaboratory;

class TopClass
{
    public function __construct()
    {
        $this->agency = (count(\Auth::user()->myroles) > 0) ? \Auth::user()->myroles[0]->agency_id : null;
        $this->ids =(\Auth::check()) ? (\Auth::user()->role == 'Administrator') ? [] : AgencyConfiguration::where('agency_id',$this->agency)->value('laboratories') : '';
    }

    public function years(){
        // $data = Target::where('agency_id',$this->agency)->distinct()->pluck('year')->toArray();
        return [2024,2025];
    }

    public function laboratory_types(){
        $lab_id = ($this->ids) ? array_column($this->ids, 'value') : null;
        $data = ListLaboratory::whereIn('id', $lab_id)->get()
        ->map(function ($item) {
            return [
                'value' => $item->id,
                'name' => $item->name
            ];
        });
        return $data;
    }

    public function samples($request){
        $startMonth = null;
        $endMonth = null;
        $month = null;
        if($request->by == 'By Month'){
            $month = ($request->month) ? \DateTime::createFromFormat('F', $request->month)->format('m') : null; 
        }elseif($request->by == 'By Quarter'){
            switch($request->quarter){
                case '1st Quarter':
                    $startMonth = 1;
                    $endMonth = 3;
                break;
                case '2nd Quarter':
                    $startMonth = 4;
                    $endMonth = 6;
                break;
                case '3rd Quarter':
                    $startMonth = 7;
                    $endMonth = 9;
                break;
                case '4th Quarter':
                    $startMonth = 10;
                    $endMonth = 12;
                break;
            }
        }else{
            switch($request->semester){
                case '1st Semester':
                    $startMonth = 1;
                    $endMonth = 6;
                break;
                case '2nd Semester':
                    $startMonth = 7;
                    $endMonth = 12;
                break;
            }
        }

        $data = TsrSample::select('name', \DB::raw('count(*) as count'))
        ->withWhereHas('tsr',function ($query) use ($request){
            $query->where('agency_id',$this->agency);
            $query->when($request->laboratory, function ($query, $laboratory) {
                $query->where('laboratory_id',$laboratory);
            });
            $query->whereHas('customer',function ($query) use ($request){
                $query ->when($request->customer, function ($query, $customer) {
                   ($customer == 'Internal') ? $query->where('is_internal',1) : $query->where('is_internal',0);
                });
            });
        })
        ->when($month, function ($query, $month) {
            $query->whereMonth('created_at',$month);
        })
        ->when($request->year, function ($query, $year) {
            $query->whereYear('created_at',$year);
        })
        ->when(isset($startMonth) && isset($endMonth), function ($query) use ($startMonth, $endMonth) {
            $query->whereBetween(\DB::raw('MONTH(created_at)'), [$startMonth, $endMonth]);
        })
        ->groupBy('name')
        ->orderBy('count', 'desc')
        ->take(10)
        ->get();
        return $data;
    }

    public function analyses($request){
        $startMonth = null;
        $endMonth = null;
        $month = null;
        if($request->by == 'By Month'){
            $month = ($request->month) ? \DateTime::createFromFormat('F', $request->month)->format('m') : null; 
        }elseif($request->by == 'By Quarter'){
            switch($request->quarter){
                case '1st Quarter':
                    $startMonth = 1;
                    $endMonth = 3;
                break;
                case '2nd Quarter':
                    $startMonth = 4;
                    $endMonth = 6;
                break;
                case '3rd Quarter':
                    $startMonth = 7;
                    $endMonth = 9;
                break;
                case '4th Quarter':
                    $startMonth = 10;
                    $endMonth = 12;
                break;
            }
        }else{
            switch($request->semester){
                case '1st Semester':
                    $startMonth = 1;
                    $endMonth = 6;
                break;
                case '2nd Semester':
                    $startMonth = 7;
                    $endMonth = 12;
                break;
            }
        }

        $data = TsrAnalysis::with('testservice.testname')
        ->select('testservice_id', \DB::raw('count(*) as count'))
        ->withWhereHas('sample', function ($query) use ($request) {
            $query->whereHas('tsr', function ($query) use ($request) {
                $query->when($request->laboratory, function ($query, $laboratory) {
                    $query->where('laboratory_id', $laboratory);
                });
                $query->whereHas('customer',function ($query) use ($request){
                    $query ->when($request->customer, function ($query, $customer) {
                    ($customer == 'Internal') ? $query->where('is_internal',1) : $query->where('is_internal',0);
                    });
                });
            });
        })
        ->where('status_id', '!=', 13)
        ->when($month, function ($query, $month) {
            $query->whereMonth('created_at',$month);
        })
        ->when($request->year, function ($query, $year) {
            $query->whereYear('created_at',$year);
        })
        ->when(isset($startMonth) && isset($endMonth), function ($query) use ($startMonth, $endMonth) {
            $query->whereBetween(\DB::raw('MONTH(created_at)'), [$startMonth, $endMonth]);
        })
        ->groupBy('testservice_id')
        ->orderBy('count', 'desc')
        ->take(50)
        ->get();
        return $data;
    }

    public function customers($request){
        $startMonth = null;
        $endMonth = null;
        $month = null;
        if($request->by == 'By Month'){
            $month = ($request->month) ? \DateTime::createFromFormat('F', $request->month)->format('m') : null; 
        }elseif($request->by == 'By Quarter'){
            switch($request->quarter){
                case '1st Quarter':
                    $startMonth = 1;
                    $endMonth = 3;
                break;
                case '2nd Quarter':
                    $startMonth = 4;
                    $endMonth = 6;
                break;
                case '3rd Quarter':
                    $startMonth = 7;
                    $endMonth = 9;
                break;
                case '4th Quarter':
                    $startMonth = 10;
                    $endMonth = 12;
                break;
            }
        }else{
            switch($request->semester){
                case '1st Semester':
                    $startMonth = 1;
                    $endMonth = 6;
                break;
                case '2nd Semester':
                    $startMonth = 7;
                    $endMonth = 12;
                break;
            }
        }

        $year = $request->year;
        $laboratory = $request->laboratory;

        $data = Customer::select('id', 'name', 'is_main', 'name_id', 'agency_id')
    ->with('customer_name:id,name,has_branches')
    ->where('agency_id', $this->agency)
    ->withCount(['tsrs' => function ($query) use ($year, $month, $startMonth, $endMonth, $laboratory, $request) {
        $query->whereIn('status_id', [3, 4]);

        if ($year) {
            $query->whereYear('created_at', $year);
        }

        if ($month) {
            $query->whereMonth('created_at', $month);
        }

        if (isset($startMonth) && isset($endMonth)) {
            $query->whereBetween(\DB::raw('MONTH(created_at)'), [$startMonth, $endMonth]);
        }

        $query->when($laboratory, function ($query, $laboratory) {
            $query->where('laboratory_id', $laboratory);
        });

        $query->whereHas('customer', function ($query) use ($request) {
            $query->when($request->customer, function ($query, $customer) {
                $query->where('is_internal', $customer == 'Internal' ? 1 : 0);
            });
        });
    }])
    ->having('tsrs_count', '>', 0) // ✅ Only include customers with at least 1 tsr
    ->orderBy('tsrs_count', 'desc')
    ->take(10)
    ->get();
        return $data;
    }
}
