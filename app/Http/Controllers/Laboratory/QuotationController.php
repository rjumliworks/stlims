<?php

namespace App\Http\Controllers\Laboratory;

use App\Traits\HandlesTransaction;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\DropdownClass;
use App\Http\Requests\Laboratory\QuotationRequest;
use App\Services\Laboratory\Quotation\SaveClass;
use App\Services\Laboratory\Quotation\ViewClass;
use App\Services\Laboratory\Quotation\UpdateClass;

class QuotationController extends Controller
{
    use HandlesTransaction;

    protected ViewClass $view;
    protected SaveClass $save;
    protected UpdateClass $update;
    protected DropdownClass $dropdown;

    public function __construct(SaveClass $save, ViewClass $view, UpdateClass $update, DropdownClass $dropdown){
        $this->view = $view;
        $this->save = $save;
        $this->update = $update;
        $this->dropdown = $dropdown;
    }

    public function index(Request $request){
        switch($request->option){
            case 'lists':
                return $this->view->lists($request);
            break;
            case 'print':
                return $this->view->print($request);
            break;
            default :
            return inertia('Modules/Laboratory/Quotations/Index',[
                'dropdowns' => [
                    'laboratories' => $this->dropdown->laboratories(),
                    'modes' => $this->dropdown->dropdowns('Mode of Release','n/a'),
                    'purposes' => $this->dropdown->dropdowns('Purpose','n/a'),
                    'discounts' => $this->dropdown->discounts(),
                    'statuses' => $this->dropdown->statuses('Quotation')
                ],
                'counts' => $this->view->counts($this->dropdown->statuses('Quotation'))
            ]);
        }
    }

    public function store(QuotationRequest $request){
        $result = $this->handleTransaction(function () use ($request) {
            switch($request->option){
                case 'quotation':
                    return $this->save->quotation($request);
                break;
                case 'sample':
                    return $this->save->sample($request);
                break;
                case 'analyses':
                    return $this->save->analyses($request);
                break;
                case 'service':
                    return $this->save->service($request);
                break;
                case 'fee':
                    return $this->save->fee($request);
                break;
                case 'tsr':
                    return $this->save->tsr($request);
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
        $request->validate([
            'due_at' => 'required_if:option,Confirm|date',
            'terms' => 'required_if:option,Confirm|array|min:1',
            'terms.*.name' => 'required_if:option,Confirm|string',
        ]);
        $result = $this->handleTransaction(function () use ($request) {
            switch($request->option){
                case 'update':
                    return $this->update->quotation($request);
                break;
                case 'Confirm':
                    return $this->update->confirm($request);
                break;
                case 'Cancel':
                    return $this->update->cancel($request);
                break;
                case 'sample':
                    return $this->update->removeSample($request);
                break;
                case 'analysis':
                    return $this->update->removeAnalysis($request);
                break;
                case 'quotation':
                    return $this->update->quotationSample($request);
                break;
                case 'terms':
                    return $this->update->terms($request);
                break;
                case 'additional':
                    return $this->update->additional($request);
                break;
                case 'delete':
                    return $this->update->deleteAdditional($request);
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

    public function show($id){
        return inertia('Modules/Laboratory/Quotations/Profile/Index',[
            'quotation' => $this->view->view($id),
            'analyses' => $this->view->analyses($id),
            'services' => $this->dropdown->services()
        ]);
    }
}
