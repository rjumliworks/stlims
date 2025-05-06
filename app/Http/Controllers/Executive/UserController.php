<?php

namespace App\Http\Controllers\Executive;

use App\Traits\HandlesTransaction;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\DropdownClass;
use App\Http\Requests\Executive\UserRequest;
use App\Services\Executive\Users\SaveClass;
use App\Services\Executive\Users\ViewClass;

class UserController extends Controller
{
    use HandlesTransaction;

    protected ViewClass $view;
    protected SaveClass $save;
    protected DropdownClass $dropdown;

    public function __construct(DropdownClass $dropdown, SaveClass $save, ViewClass $view){
        $this->dropdown = $dropdown;
        $this->view = $view;
        $this->save = $save;
    }

    public function index(Request $request){
        switch($request->option){
            case 'lists':
                return $this->view->users($request);
            break;
            default:
                return inertia('Modules/Executive/Users/Index',[
                    'dropdowns' => [
                        'agencies' => $this->dropdown->agencies(),
                        'laboratories' => $this->dropdown->laboratories(),
                        'roles' => $this->dropdown->roles(),
                    ]
                ]); 
        }   
    }

    public function store(UserRequest $request){
        $result = $this->handleTransaction(function () use ($request) {
            switch($request->option){
                case 'user':
                    return $this->save->store($request);
                break;
            }
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
            switch($request->option){
                case 'user':
                    return $this->save->update($request);
                break;
            }
        });

        return back()->with([
            'data' => $result['data'],
            'message' => $result['message'],
            'info' => $result['info'],
            'status' => $result['status'],
        ]);
    }

}
