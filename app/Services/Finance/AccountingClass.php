<?php

namespace App\Services\Finance;

use App\Models\Target;
use App\Models\AgencyConfiguration;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\RSTLExport;
use App\Exports\OpExport;
use App\Exports\TsrExport;
use App\Exports\ReconciliationExport;

class AccountingClass
{
    public function __construct()
    {
        $this->agency = (\Auth::user()->myroles) ? \Auth::user()->myroles[0]->agency_id : null;
        $this->ids =(\Auth::check()) ? (\Auth::user()->role == 'Administrator') ? [] : AgencyConfiguration::where('agency_id',$this->agency)->value('laboratories') : '';
    }

    public function years(){
        // $data = Target::where('agency_id',$this->agency)->distinct()->pluck('year')->toArray();
        return [2024,2025];
    }

    public function report($request){
        switch($request->subtype){
            case 'pdf':
                return $this->pdf($request);
            break;
            case 'excel':
                return $this->excel($request);
            break;
        }
    }

    private function pdf($request){
        $month = ($request->month) ? \DateTime::createFromFormat('F', $request->month)->format('m') : date('m');  
        $year = ($request->year) ? $request->year : date('Y');
        $type = $request->laboratory;
        
        if($request->type == 'op'){

        }else if($request->type == 'rstl'){

        }else{

        }
    }

    private function excel($request){
        $month = ($request->month) ? \DateTime::createFromFormat('F', $request->month)->format('m') : date('m');  
        $year = ($request->year) ? $request->year : date('Y');
        $type = $request->laboratory;
        $month_name = $request->month;

        switch($request->type){
            case 'op':
                return Excel::download(new OpExport($month,$year,$this->agency), 'opor-'.strtolower($month_name).'-'.$year.'.xlsx');
            break;
            case 'rstl':
                return Excel::download(new RSTLExport($month,$year,$type,$this->agency), 'rstl-'.strtolower($month_name).'-'.$year.'.xlsx');
            break;
            case 'tsr':
                return Excel::download(new TsrExport($month,$year,$type,$this->agency), 'tsr-'.strtolower($month_name).'-'.$year.'.xlsx');
            break;
            default:
                return Excel::download(new ReconciliationExport($month,$year,$this->agency), 'reconciliation-'.strtolower($month_name).'-'.$year.'.xlsx');
        }
    }
}
