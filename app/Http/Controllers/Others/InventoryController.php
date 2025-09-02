<?php

namespace App\Http\Controllers\Others;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\DropdownClass;
use App\Traits\HandlesTransaction;
use App\Services\Others\Inventory\ItemClass;
use App\Services\Others\Inventory\SupplierClass;
use App\Services\Others\Inventory\InventoryClass;
use App\Http\Requests\Operation\InventoryRequest;

class InventoryController extends Controller
{
    use HandlesTransaction;

    public function __construct(DropdownClass $dropdown, ItemClass $item, SupplierClass $supplier, InventoryClass $inventory){
        $this->dropdown = $dropdown;
        $this->item = $item;
        $this->supplier = $supplier;
        $this->inventory = $inventory;
    }

    public function index(Request $request){
        switch($request->option){
            case 'lists':
                return $this->inventory->lists($request);
            break;
            case 'search':
                return $this->item->search($request);
            break;
            case 'checkout':
                return $this->item->checkout($request);
            break;
            case 'items':
                return $this->item->lists($request);
            break;
            default :
            return inertia('Modules/Others/Inventory/Dashboard/Index',[
                'dropdowns' => [
                    'regions' => $this->dropdown->regions(),
                    'laboratories' => $this->dropdown->laboratories(),
                    'statistics' => $this->inventory->statistics(),
                    'suppliers' => $this->supplier->dropdown(),
                    'units' => $this->dropdown->dropdowns('Unit'),
                ]
            ]);
        }
    }

    public function show($code){
        switch($code){
            case 'checkout':
                return inertia('Modules/Others/Inventory/Checkout/Index');
            break;
            case 'suppliers':
                return inertia('Modules/Others/Inventory/Suppliers/Index');
            break;
            case 'items':
                return inertia('Modules/Others/Inventory/Items/Index',[
                    'dropdowns' => [
                        'laboratories' => $this->dropdown->laboratories(),
                        'regions' => $this->dropdown->regions(),
                        'categories' => $this->dropdown->dropdowns('Inventory','Category'),
                        'suppliers' => $this->supplier->dropdown(),
                        'units' => $this->dropdown->dropdowns('Inventory','Unit'),
                    ],
                    'analytics' => [
                        'categories' => $this->item->categories(),
                        'statuses' => $this->item->statuses(),
                        'reminders' => $this->item->reminders(),
                    ]
                ]);
            break;
        }
    }

    public function store(InventoryRequest $request){
        $result = $this->handleTransaction(function () use ($request) {
            switch($request->option){
                case 'withdraw':
                    return $this->item->withdraw($request);
                break;
                case 'supplier':
                    return $this->supplier->save($request);
                break;
                case 'item':
                    return $this->item->save($request);
                break;
                case 'stock':
                    return $this->item->stock($request);
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
            return $this->item->stockUpdate($request);
        });
        
        return back()->with([
            'data' => $result['data'],
            'message' => $result['message'],
            'info' => $result['info'],
            'status' => $result['status'],
        ]);
    }
}
