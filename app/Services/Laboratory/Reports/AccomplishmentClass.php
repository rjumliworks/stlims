<?php

namespace App\Services\Laboratory\Reports;

use App\Models\Tsr;
use App\Models\TsrSample;
use App\Models\TsrAnalysis;
use App\Models\Target;
use App\Models\ListLaboratory;
use App\Models\AgencyConfiguration;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\AccomplishmentExport;
use App\Exports\ReportExport;
use App\Exports\SampleExport;
use App\Exports\AnalysisExport;
use App\Exports\CountExport;
use App\Exports\SpenderExport;

class AccomplishmentClass
{
    public function __construct()
    {
        $this->agency = (\Auth::user()->myroles) ? \Auth::user()->myroles[0]->agency_id : null;
        $this->ids =(\Auth::check()) ? (\Auth::user()->role == 'Administrator') ? [] : AgencyConfiguration::where('agency_id',$this->agency)->value('laboratories') : '';
    }

    public function years(){
        $data = Target::where('agency_id',$this->agency)->distinct()->pluck('year')->toArray();
        return $data;
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

    public function laboratories($request){
        $month = ($request->month) ? \DateTime::createFromFormat('F', $request->month)->format('m') : null;  
        $year = ($request->year) ? $request->year : null;
        $lab_id = ($this->ids) ? array_column($this->ids, 'value') : null;
        $laboratories = ListLaboratory::whereIn('id', $lab_id)->get();
        
        $lists = []; $requests_total = 0; $samples_total = 0; $analyses_total = 0; $fees_total = 0; $gratis_total = 0; $discount_total = 0; $gross_total = 0;
        
        foreach($laboratories as $laboratory){
            $req = Tsr::where('status_id','!=',5)
            ->when($month, function ($query, $month) {
                $query->whereMonth('created_at',$month);
            })
            ->when($year, function ($query, $year) {
                $query->whereYear('created_at',$year);
            })
            ->where('laboratory_id',$laboratory->id)->where('agency_id',$this->agency)->count();

            $sample  = TsrSample::
            when($month, function ($query, $month) {
                $query->whereMonth('created_at',$month);
            })
            ->when($year, function ($query, $year) {
                $query->whereYear('created_at',$year);
            })
            ->whereHas('tsr', function ($query) use ($laboratory){
                $query->where('laboratory_id',$laboratory->id)->where('agency_id',$this->agency)->where('status_id','!=',5);
            })->count();

            $analysis = TsrAnalysis::
            when($month, function ($query, $month) {
                $query->whereMonth('created_at',$month);
            })
            ->when($year, function ($query, $year) {
                $query->whereYear('created_at',$year);
            })->whereHas('sample', function ($query) use ($laboratory){
                $query->whereHas('tsr', function ($query) use ($laboratory){
                    $query->where('laboratory_id',$laboratory->id)->where('agency_id',$this->agency)->where('status_id','!=',5)->where('is_shelf',0);
                });
            })->count();

            $gtotal = Tsr::whereDoesntHave('parent')
            ->withWhereHas('payment', function ($query) {
                $query->where('is_free',0);
            })
            ->where('status_id','!=',5)
            ->when($month, function ($query, $month) {
                $query->whereMonth('created_at',$month);
            })
            ->when($year, function ($query, $year) {
                $query->whereYear('created_at',$year);
            })
            ->where('laboratory_id',$laboratory->id)->where('agency_id',$this->agency)
            ->get()
            ->sum(function ($tsr) {
                return str_replace(['₱ ', '₱', ',', ' '], '', $tsr->payment->total);
            });

            $gdiscount = Tsr::whereDoesntHave('parent')
            ->withWhereHas('payment', function ($query) {
                $query->where('is_free',0);
            })
            ->where('status_id','!=',5)
            ->when($month, function ($query, $month) {
                $query->whereMonth('created_at',$month);
            })
            ->when($year, function ($query, $year) {
                $query->whereYear('created_at',$year);
            })
            ->where('laboratory_id',$laboratory->id)->where('agency_id',$this->agency)
            ->get()
            ->sum(function ($tsr) {
                return str_replace(['₱ ', '₱', ',', ' '], '', $tsr->payment->discount);
            });

            $ggratis = Tsr::whereDoesntHave('parent')
            ->withWhereHas('payment', function ($query) {
                $query->where('is_free',1);
            })
            ->where('status_id','!=',5)
            ->when($month, function ($query, $month) {
                $query->whereMonth('created_at',$month);
            })
            ->when($year, function ($query, $year) {
                $query->whereYear('created_at',$year);
            })
            ->where('laboratory_id',$laboratory->id)->where('agency_id',$this->agency)
            ->get()
            ->sum(function ($tsr) {
                return str_replace(['₱ ', '₱', ',', ' '], '', $tsr->payment->discount);
            });
           
            $lists[] = [
                $laboratory->name,
                $req,
                $sample,
                $analysis,
                '₱'.number_format($gtotal),
                '₱'.number_format($ggratis),
                '₱'.number_format($gdiscount),
                '₱'.number_format($gtotal + $ggratis + $gdiscount),
                $laboratory->id,
            ];

            $requests_total += $req;
            $samples_total += $sample;
            $analyses_total += $analysis;
            $fees_total += $gtotal;
            $gratis_total += $ggratis;
            $discount_total += $gdiscount;
            // $gross_total += (($total+$contract+$pending+$wallet) + $gratis + $discount);
            $gross_total += ($gtotal + $ggratis + $gdiscount);
        }
        $footer[] = [
            'Total',$requests_total, $samples_total, $analyses_total, '₱'.number_format($fees_total), '₱'.number_format($gratis_total), '₱'.number_format($discount_total), '₱'.number_format($gross_total)
        ];
        return [
            'lists' => $lists,
            'footer' => $footer
        ];
    }

    public function pdf($request){
        $month = ($request->month) ? \DateTime::createFromFormat('F', $request->month)->format('m') : date('m');  
        $year = ($request->year) ? $request->year : date('Y');
        $lab = $request->laboratory;

        $lists = Tsr::select('id','code','customer_id')
        ->whereDoesntHave('parent')
        ->with('customer:id,name,name_id','customer.customer_name:id,name','customer.address:address,addressable_id,region_code,province_code,municipality_code,barangay_code','customer.address.region:code,name,region','customer.address.province:code,name','customer.address.municipality:code,name','customer.address.barangay:code,name')
        ->with('payment.type')
        ->whereMonth('created_at',$month)
        ->whereYear('created_at',$year)
        ->where('laboratory_id',$lab)
        ->get();
        // return $lists;
        $array = [
            'title' => 'List of OP',
            'lists' => $lists,
            'year' =>  strtoupper(\DateTime::createFromFormat('m', $month)->format('F')).' '.$year
        ];
        $pdf = \PDF::loadView('generated.accomplishment',$array)->setPaper([0, 0, 500, 900], 'landscape');
        return $pdf->stream('accomplishment.pdf');
    }

    public function excel($request){
        $month = ($request->month) ? \DateTime::createFromFormat('F', $request->month)->format('m') : date('m');  
        $year = ($request->year) ? $request->year : date('Y');
        $lab = $request->laboratory;

        return Excel::download(new AccomplishmentExport($month,$year,$lab), 'tsr.xlsx');
    }

    public function reports($request){
        $month = ($request->month) ? \DateTime::createFromFormat('F', $request->month)->format('m') : date('m');  
        $year = ($request->year) ? $request->year : date('Y');
        $lab = $request->laboratory;

        return Excel::download(new ReportExport($month,$year,$lab), 'tsr.xlsx');
    }

    public function samples($request){
        $year = ($request->year) ? $request->year : date('Y');
        $lab = ($request->laboratory) ? $request->laboratory : null;

        return Excel::download(new SampleExport($year,$lab), 'samples.xlsx');
    }

    public function analyses($request){
        $year = ($request->year) ? $request->year : date('Y');
        $lab = ($request->laboratory) ? $request->laboratory : null;

        return Excel::download(new AnalysisExport($year,$lab), 'analysis.xlsx');
    }
    
    public function counts($request){
        $year = ($request->year) ? $request->year : date('Y');
        $lab = ($request->laboratory) ? $request->laboratory : null;

        return Excel::download(new CountExport($year,$lab), 'count.xlsx');
    }

    public function spender($request){
        $year = ($request->year) ? $request->year : date('Y');
        $lab = ($request->laboratory) ? $request->laboratory : null;

        return Excel::download(new SpenderExport($year,$lab), 'spender.xlsx');
    }
}
