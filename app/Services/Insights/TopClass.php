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
            $query->where('agency_id',$this->agency)->where('status_id','!=',5);
            $query->when($request->laboratory, function ($query, $laboratory) {
                $query->where('laboratory_id',$laboratory);
            });
            // $query->whereHas('customer',function ($query) use ($request){
            //     $query ->when($request->customer, function ($query, $customer) {
            //        ($customer == 'Internal') ? $query->where('is_internal',1) : $query->where('is_internal',0);
            //     });
            // });
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
        // ->groupBy('name')
        ->orderBy('count', 'desc')
        ->take(500)
        ->get();
        return $data;
    }

    public function totalsamples()
    {
        $data = TsrSample::whereHas('tsr',function ($query){
            $query->where('status_id','!=',5)->where('agency_id',$this->agency);
        })
        ->whereYear('created_at',now())->count();   
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

        $data = \DB::table('tsr_analyses')
        ->join('testservices', 'testservices.id', '=', 'tsr_analyses.testservice_id')
        ->join('testservice_names', 'testservice_names.id', '=', 'testservices.testname_id')
        ->join('tsr_samples', 'tsr_samples.id', '=', 'tsr_analyses.sample_id')
        ->join('tsrs', 'tsrs.id', '=', 'tsr_samples.tsr_id')
        ->join('customers', 'customers.id', '=', 'tsrs.customer_id')
        ->select('testservice_names.name as name', \DB::raw('COUNT(*) as count'))
        ->where('tsr_analyses.status_id', '!=', 13)
        ->when($month, fn($q) => $q->whereMonth('tsr_analyses.created_at', $month))
        ->when($request->year, fn($q) => $q->whereYear('tsr_analyses.created_at', $request->year))
        ->when(isset($startMonth) && isset($endMonth), fn($q) => 
            $q->whereBetween(\DB::raw('MONTH(tsr_analyses.created_at)'), [$startMonth, $endMonth])
        )
        ->when($request->laboratory, fn($q, $lab) => $q->where('tsrs.laboratory_id', $lab))
        ->when($request->customer, function ($q, $customer) {
            if ($customer === 'Internal') {
                $q->where('customers.is_internal', 1);
            } else {
                $q->where('customers.is_internal', 0);
            }
        })
        ->groupBy('testservice_names.name')
        ->orderByDesc('count')
        ->limit(100)
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
    ->take(500)
    ->get();
        return $data;
    }
}
