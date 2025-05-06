<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\DropdownClass;
use App\Services\Dashboard\TmClass;
use App\Services\Dashboard\CroClass;
use App\Services\Dashboard\AideClass;
use App\Services\Dashboard\HeadClass;
use App\Services\Dashboard\AnalystClass;
use App\Services\Dashboard\CashierClass;
use App\Services\Dashboard\ReleasingClass;
use App\Services\Dashboard\AccountantClass;

class DashboardController extends Controller
{
    public function __construct(
        TmClass $tm,
        AideClass $aide,
        DropdownClass $dropdown,
        CashierClass $cashier, 
        AccountantClass $accountant, 
        AnalystClass $analyst,
        CroClass $cro,
        HeadClass $head,
        ReleasingClass $releasing
    ){
        $this->tm = $tm;
        $this->cro = $cro;
        $this->aide = $aide;
        $this->head = $head;
        $this->cashier = $cashier;
        $this->analyst = $analyst;
        $this->dropdown = $dropdown;
        $this->releasing = $releasing;
        $this->accountant = $accountant;
    }

    public function index(Request $request){
        if(!\Auth::check()){
            return inertia('Auth/Login');
        }else{
           
            if(\Auth::user()->role === 'Administrator'){
                return inertia('Modules/Executive/Dashboard/Index');
            }else{
                $role = \Auth::user()->myroles[0]->role->name;
                switch($role){
                    case 'Accountant':
                        return inertia('Modules/Finance/Accounting/Dashboard/Index',[
                            'dropdowns' => [
                                'reminders' => $this->accountant->reminders(),
                                'tsrs' => $this->accountant->forpayment($request),
                                'collections' => $this->dropdown->dropdowns('Collection Type','Laboratory'),
                                'payments' => $this->dropdown->dropdowns('Payment Mode','n/a'),
                            ]
                        ]);
                    break;
                    case 'Cashier':
                        return inertia('Modules/Finance/Cashiering/Dashboard/Index',[
                            'dropdowns' => [
                                'reminders' => $this->accountant->reminders(),
                                'orseries' => $this->cashier->orseries(),
                                'receipts' => $this->cashier->receipts(),
                                'deposits' => $this->dropdown->dropdowns('Deposit Type','n/a'),
                                'collections' => $this->dropdown->dropdowns('Collection Type','Non-laboratory'),
                                'payments' => $this->dropdown->dropdowns('Payment Mode','n/a'),
                            ]
                        ]);
                    break;
                    case 'Lab Analyst':
                        return inertia('Modules/Laboratory/Dashboard/Analyst/Index',[
                            'reminders' => $this->analyst->reminders($request),
                            'tasks' => $this->analyst->tasks($request),
                            'lists' => $this->analyst->lists($request),
                        ]);
                    break;
                    case 'Laboratory Aide':
                        return inertia('Modules/Laboratory/Dashboard/Aide/Index',[
                            'dropdowns' => [
                                'laboratories' => $this->dropdown->laboratories($request),
                                'disposals' => $this->dropdown->dropdowns('Disposal','n/a'),
                                'reminders' => $this->aide->reminders($request),
                                'statuses' => $this->aide->statuses($request),
                            ]
                        ]);
                    break;
                    case 'Laboratory Head':
                        return inertia('Modules/Laboratory/Dashboard/TM/Index',[
                            'dropdowns' => [
                                'info' => $this->head->info($request),
                                'counts' => $this->head->counts($request),
                                'reminders' => $this->head->reminders($request),
                                'statuses' => $this->head->statuses($request),
                                'laboratories' => $this->dropdown->laboratories($request),
                            ]
                        ]);
                    break;
                    case 'Releasing Officer':
                        return inertia('Modules/Laboratory/Dashboard/Releasing/Index',[
                            'dropdowns' => [
                                'counts' => $this->releasing->counts($request),
                                'laboratories' => $this->dropdown->laboratories($request),
                                'statuses' => $this->dropdown->statuses('Release'),
                                'lists' => $this->releasing->lists($request),
                                'age' => $this->releasing->age($request)
                            ],
                        ]);
                    break;
                    case 'Technical Manager':
                        return inertia('Modules/Laboratory/Dashboard/TM/Index',[
                            'dropdowns' => [
                                'info' => $this->tm->info($request),
                                'counts' => $this->tm->counts($request),
                                'reminders' => $this->tm->reminders($request),
                                'statuses' => $this->tm->statuses($request),
                                'laboratories' => $this->dropdown->laboratories($request),
                            ]
                        ]);
                    break;
                    default: 
                    return inertia('Modules/Laboratory/Dashboard/CRO/Index',[
                        'dropdowns' => [
                            'info' => $this->cro->info($request),
                            'info1' => $this->cro->info1($request),
                            'info2' => $this->cro->info2($request),
                            'counts' => $this->cro->counts($request),
                            'reminders' => $this->cro->reminders($request),
                            'notices' => $this->cro->notices($request),
                            'statuses' => $this->cro->statuses($request),
                            'laboratories' => $this->dropdown->laboratories($request),
                        ]
                    ]);
                }
            }
        }
    }

    public function search(Request $request){
        $option = $request->option;
        switch($option){
            case 'provinces':
                return $this->dropdown->provinces($request->code);
            break;
            case 'municipalities':
                return $this->dropdown->municipalities($request->code);
            break;
            case 'barangays':
                return $this->dropdown->barangays($request->code);
            break;
            case 'units':
                return $this->dropdown->units($request->code);
            break;
            case 'services':
                return $this->dropdown->services($request->code);
            break;
            case 'tsrs':
                return $this->dropdown->tsrs($request->keyword);
            break;
            case 'tsrsamples':
                return $this->dropdown->tsrsamples($request->keyword);
            break;
            case 'payors':
                return $this->dropdown->payors($request);
            break;
            case 'reports':
                return $this->dropdown->reports($request);
            break;
        }
    }
}
