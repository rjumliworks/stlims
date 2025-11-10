<?php

namespace App\Http\Controllers\Executive;

use App\Traits\HandlesTransaction;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\DropdownClass;
use App\Http\Requests\Executive\UserRequest;
use App\Services\Executive\Users\SaveClass;
use App\Services\Executive\Users\UserClass;

class UserController extends Controller
{
    use HandlesTransaction;

    protected UserClass $user;
    protected SaveClass $save;
    protected DropdownClass $dropdown;

    public function __construct(DropdownClass $dropdown, SaveClass $save, UserClass $user){
        $this->dropdown = $dropdown;
        $this->user = $user;
        $this->save = $save;
    }

    public function index(Request $request){
        switch($request->option){
            case 'lists':
                return $this->user->list($request);
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
                 case 'status':
                    return $this->user->status($request);
                break;
                case 'credential':
                    return $this->user->credential($request);
                break;
                case 'role':
                    return $this->user->role($request);
                break;
                case 'new':
                    return $this->user->new($request);
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

    public function show($code){
        return inertia('Modules/Executive/Users/View',[
            'user_data' => $this->user->view($code),
            'dropdowns' => [
               'roles' => $this->dropdown->roles()
            ],
        ]);
    }

}
