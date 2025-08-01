<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Finance\AccountingClass;
use App\Services\Laboratory\Reports\AccomplishmentClass;
use App\Services\Laboratory\Reports\TransactionClass;

class ReportController extends Controller
{
    public function __construct(AccomplishmentClass $accomplishment, AccountingClass $accounting, TransactionClass $transaction){
        $this->accomplishment = $accomplishment;
        $this->accounting = $accounting;
        $this->transaction = $transaction;
    }

    public function index(Request $request){
        switch($request->option){
            case 'lists':
                return [
                    'laboratories' => $this->accomplishment->laboratories($request)
                ];
            break;
            case 'pdf':
                return $this->accomplishment->pdf($request);
            break;
            case 'excel':
                
                return $this->accomplishment->excel($request);
            break;
            case 'accounting':
                return $this->accounting->report($request);
            break;
            case 'reports': 
                return $this->accomplishment->reports($request);
            break;
            case 'samples':
                return $this->accomplishment->samples($request);
            break;
            case 'peza':
                return $this->accomplishment->peza($request);
            break;
            case 'analyses':
                return $this->accomplishment->analyses($request);
            break;
            case 'counts':
                return $this->accomplishment->counts($request);
            break;
            case 'spender':
                return $this->accomplishment->spender($request);
            break;
            default:
            return inertia('Modules/Reports/Index',[
                'years' => $this->accounting->years(),
                'types' => $this->accomplishment->laboratory_types(),
                'info' => [
                    'month' => \DateTime::createFromFormat('!m', date('m'))->format('F'),
                    'year' => date('Y')
                ]
            ]);
        }
    }

    public function show($id){
        return inertia('Modules/Reports/Transactions/Index',[
            'labs' => $this->transaction->laboratory(),
            'nonlabs' => $this->transaction->nonlaboratory()
        ]);
    }
}
