<?php

namespace App\Services\Others\Inventory;

use App\Models\InventoryStock;
use App\Http\Resources\Operation\Inventory\StockResource;

class InventoryClass
{
    public function lists($request){
        $data = StockResource::collection(
            InventoryStock::query()
            ->with('item.unittype','item.category','supplier')
            ->when($request->keyword, function ($query, $keyword) {
                $query->whereHas('item',function ($query) use ($keyword){
                    $query->where('name', 'LIKE', "%{$keyword}%");
                });
            })
            ->when($request->type, function ($query, $type) {
                if($type == 'expired'){
                    $query->where('date', '<=', now());
                }else{
                    $query->whereHas('item', function ($query) {
                        $query->whereColumn('reorder', '>', 'quantity');
                    });
                }
            })
            // ->whereHas('item',function ($query){
            //     $query ->where('laboratory_id',$this->laboratory)->where('laboratory_type',$this->type);
            // })
            ->paginate($request->count)
        );
        return $data;
    }

    public function statistics(){
        return [
            [
                'name' => 'All Items',
                'color' => 'text-success',
                'icon' => 'ri-shopping-basket-2-fill',
                'total' => InventoryStock::count(),
                'select' => null
            ],
            [
                'name' => 'Ouf of Stock',
                'color' => 'text-warning',
                'icon' => 'ri-alert-fill',
                'total' => InventoryStock::whereHas('item', function ($query) {
                    $query->whereColumn('reorder', '>', 'quantity');
                })->count(),
                'select' => 'outofstock'
            ],
            [
                'name' => 'Expired Items',
                'color' => 'text-danger',
                'icon' => 'ri-alarm-warning-fill',
                'total' => InventoryStock::where('expired_at', '<=', now())->count(),
                'select' => 'expired'
            ],
        ];
    }
}
