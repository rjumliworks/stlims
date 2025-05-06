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
        $month = ($request->month) ? \DateTime::createFromFormat('F', $request->month)->format('m') : null; 

        $data = TsrSample::select('name', \DB::raw('count(*) as count'))
        ->withWhereHas('tsr',function ($query) use ($request){
            $query->where('agency_id',$this->agency);
            $query->when($request->laboratory, function ($query, $laboratory) {
                $query->where('laboratory_id',$laboratory);
            });
        })
        ->when($month, function ($query, $month) {
            $query->whereMonth('created_at',$month);
        })
        ->when($request->year, function ($query, $year) {
            $query->whereYear('created_at',$year);
        })
        ->groupBy('name')
        ->orderBy('count', 'desc')
        ->take(10)
        ->get();
        return $data;
    }

    public function analyses($request){
        $month = ($request->month) ? \DateTime::createFromFormat('F', $request->month)->format('m') : null; 

        $data = TsrAnalysis::with('testservice.testname')
        ->select('testservice_id', \DB::raw('count(*) as count'))
        ->withWhereHas('sample', function ($query) use ($request) {
            $query->whereHas('tsr', function ($query) use ($request) {
                $query->when($request->laboratory, function ($query, $laboratory) {
                    $query->where('laboratory_id', $laboratory);
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
        ->groupBy('testservice_id')
        ->orderBy('count', 'desc')
        ->take(10)
        ->get();
        return $data;
    }

    public function customers($request){
        $month = ($request->month) ? \DateTime::createFromFormat('F', $request->month)->format('m') : null; 
        $year = $request->year;
        $laboratory = $request->laboratory;

        $data = Customer::select('id','name','is_main','name_id','agency_id')
        ->with('customer_name:id,name,has_branches')
        ->where('agency_id',$this->agency)
        ->withCount(['tsrs' => function ($query) use ($year,$month,$laboratory){
            $query->whereIn('status_id', [3,4]);
            ($year) ? $query->whereYear('created_at',$year) : '';
            ($month) ? $query->whereMonth('created_at',$month) : '';
            $query->when($laboratory, function ($query, $laboratory) {
                $query->where('laboratory_id', $laboratory);
            });
        }])
        ->orderBy('tsrs_count', 'desc')
        ->take(10)
        ->get();
        return $data;
    }
}
