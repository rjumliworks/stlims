<?php

namespace App\Http\Controllers\Others;

use App\Traits\HandlesTransaction;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\DropdownClass;
use App\Services\Others\Equipment\SaveClass;
use App\Services\Others\Equipment\ViewClass;
use App\Http\Requests\Operation\EquipmentRequest;

class EquipmentController extends Controller
{
    use HandlesTransaction;

    public function __construct(DropdownClass $dropdown, SaveClass $save, ViewClass $view){
        $this->dropdown = $dropdown;
        $this->view = $view;
        $this->save = $save;
    }

    public function index(Request $request){
        switch($request->option){
            case 'lists':
                return $this->view->lists($request);
            break;
            default :
            return inertia('Modules/Others/Equipments/Index',[
                'dropdowns' => [
                    'regions' => $this->dropdown->regions(),
                    'laboratories' => $this->dropdown->laboratories(),
                    'equipments' => $this->dropdown->dropdowns('Equipment','n/a'),
                    'suppliers' => $this->dropdown->suppliers(),
                    'calibrations' => $this->view->calibrations($request),
                    'maintenances' => $this->view->maintenances($request),
                ]
            ]);
        }
    }
}
