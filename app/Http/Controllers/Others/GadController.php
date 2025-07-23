<?php

namespace App\Http\Controllers\Others;

use App\Http\Controllers\Controller;
use App\Services\Others\GadClass;
use Illuminate\Http\Request;

class GadController extends Controller
{
    public function __construct(GadClass $gad){
        $this->gad = $gad;
    }

    public function index(Request $request){
        return inertia('Modules/Others/Gad/Index');
    }

    public function show($code){
        switch($code){
            case 'workforce':
                return inertia('Modules/Others/Gad/Pages/Workforce',[
                    'id' => $code
                ]);
            break;
             case 'customers':
                return inertia('Modules/Others/Gad/Pages/Customer',[
                    'id' => $code,
                    'transactions' => $this->gad->transactions(),
                    'numbers' => $this->gad->numbers(),
                    'list' => $this->gad->chart()
                ]);
            break;
            case 'estado':
                return inertia('Modules/Others/Gad/Pages/Estado',[
                    'id' => $code
                ]);
            break;
            case 'gad':
                return inertia('Modules/Others/Gad/Pages/Gad',[
                    'id' => $code
                ]);
            break;
            case 'planbudget':
                return inertia('Modules/Others/Gad/Pages/Planbudget',[
                    'id' => $code
                ]);
            break;
            case 'orgchart':
                return inertia('Modules/Others/Gad/Pages/Orgchart',[
                    'id' => $code
                ]);
            break;
            case 'issuances':
                return inertia('Modules/Others/Gad/Pages/Issuance',[
                    'id' => $code
                ]);
            break;
        }
    }
}
