<?php

namespace App\Http\Controllers\Others;

use App\Traits\HandlesTransaction;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\DropdownClass;
use App\Http\Requests\Operation\CalendarRequest;
use App\Services\Others\Calendar\SaveClass;
use App\Services\Others\Calendar\ViewClass;

class CalendarController extends Controller
{
    use HandlesTransaction;

    public function __construct(DropdownClass $dropdown, SaveClass $save, ViewClass $view){
        $this->dropdown = $dropdown;
        $this->view = $view;
        $this->save = $save;
    }

    public function index(Request $request){
        switch($request->option){
            case 'events':
                return $this->view->events($request);
            break;
            case 'dues':
                return $this->view->dues($request);
            break;
            default :
            return inertia('Modules/Others/Calendars/Index',[
                'dropdowns' => [
                    'events' => $this->dropdown->events(),
                    'laboratories' => $this->dropdown->laboratories()
                ]
            ]);
        }
    }

    public function store(CalendarRequest $request){
        $result = $this->handleTransaction(function () use ($request) {
            return $this->save->save($request);
        });

        return back()->with([
            'data' => $result['data'],
            'message' => $result['message'],
            'info' => $result['info'],
            'status' => $result['status'],
        ]);
    }

    public function update(Request $request){
        $result = $this->handleTransaction(function () use ($request) {
            return $this->save->update($request);
        });
        
        return back()->with([
            'data' => $result['data'],
            'message' => $result['message'],
            'info' => $result['info'],
            'status' => $result['status'],
        ]);
    }

    public function destroy($id)
    {
        $result = $this->handleTransaction(function () use ($id) {
            return $this->save->delete($id);
        });

        return back()->with([
            'data' => $result['data'],
            'message' => $result['message'],
            'info' => $result['info'],
            'status' => $result['status'],
        ]);
    }
}
