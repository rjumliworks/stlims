<?php

namespace App\Services\Others\Inventory;

use App\Models\Agency;
use App\Models\ListDropdown;
use App\Models\InventoryItem;
use App\Models\InventoryStock;
use App\Models\InventoryWithdrawal;
use Illuminate\Database\Eloquent\Builder;
use App\Http\Resources\Operation\Inventory\ItemResource;
use App\Http\Resources\Operation\Inventory\StockResource;

class ItemClass
{
    protected $agency;
    
    public function __construct()
    {   
        $this->agency = (\Auth::user()->role != 'Administrator') ? (\Auth::user()->myroles) ? \Auth::user()->myroles[0]->agency_id : null : null;
    }

    public function lists($request){
        $data = ItemResource::collection(
            InventoryItem::query()
            ->with('category','unittype','stocks.withdrawals','stocks.supp')
            ->where('agency_id',$this->agency)
            ->when($request->keyword, function ($query, $keyword) {
                $query->where('name', 'LIKE', "%{$keyword}%");
            })
            ->when($request->category, function ($query, $category) {
                $query->where('category_id', $category);
            })
            ->withCount([
                'stocks as onhand' => function (Builder $query) {
                    $query->select(\DB::raw('SUM(onhand)'));
                }, 
                'stocks as stock' => function (Builder $query) {
                    $query->select(\DB::raw('SUM(
                    CASE
                        WHEN inventory_stocks.unit_id = inventory_items.unit_id THEN inventory_stocks.unit * inventory_stocks.onhand
                        WHEN inventory_stocks.unit_id = 123 AND inventory_items.unit_id = 124 THEN inventory_stocks.unit * inventory_stocks.onhand * 1000
                        WHEN inventory_stocks.unit_id = 124 AND inventory_items.unit_id = 123 THEN inventory_stocks.unit * inventory_stocks.onhand * 0.001
                        WHEN inventory_stocks.unit_id = 125 AND inventory_items.unit_id = 126 THEN inventory_stocks.unit * inventory_stocks.onhand * 0.001
                        WHEN inventory_stocks.unit_id = 126 AND inventory_items.unit_id = 125 THEN inventory_stocks.unit * inventory_stocks.onhand * 1000
                        ELSE inventory_stocks.unit * inventory_stocks.onhand
                    END)'))
                        ->where('onhand', '!=', 0);
                }
            ])
            ->paginate($request->count)
        );
        return $data;
    }

    public function save($request){
        $data = InventoryItem::create(array_merge($request->all(),[
            'code' => $this->generateCode($request),
            'agency_id' => $this->agency,
            'img' => 'avatar.jpg'
        ]));
        return [
            'data' => new ItemResource($data),
            'message' => 'Item creation was successful!', 
            'info' => "You've successfully created the new item."
        ];
    }

    public function checkout($request){
        $keyword = $request->keyword;
        $data = InventoryStock::with('unittype','item:id,name','supp')
            ->withWhereHas('item', function ($query) use ($keyword){
                $query->where('agency_id',$this->agency);
            })
            ->where('code',$keyword)
            ->first();
        return new StockResource($data);
    }

    public function search($request){
        $keyword = $request->keyword;
        $data = InventoryItem::with('category','unittype')
            ->withWhereHas('stocks', function ($query) use ($keyword){
                $query->with('withdrawals','unittype','item:id,name')->where('onhand', '!=', 0);   
            })
            ->where('agency_id',$this->agency)
            ->where('name', 'LIKE', "%{$keyword}%")
            ->withCount([
                'stocks as onhand' => function (Builder $query) {
                    $query->select(\DB::raw('SUM(onhand)'));
                }, 
                'stocks as stock' => function (Builder $query) {
                    $query->select(\DB::raw('SUM(
                    CASE
                        WHEN inventory_stocks.unit_id = inventory_items.unit_id THEN inventory_stocks.unit * inventory_stocks.onhand
                        WHEN inventory_stocks.unit_id = 123 AND inventory_items.unit_id = 124 THEN inventory_stocks.unit * inventory_stocks.onhand * 1000
                        WHEN inventory_stocks.unit_id = 124 AND inventory_items.unit_id = 123 THEN inventory_stocks.unit * inventory_stocks.onhand * 0.001
                        WHEN inventory_stocks.unit_id = 125 AND inventory_items.unit_id = 126 THEN inventory_stocks.unit * inventory_stocks.onhand * 0.001
                        WHEN inventory_stocks.unit_id = 126 AND inventory_items.unit_id = 125 THEN inventory_stocks.unit * inventory_stocks.onhand * 1000
                        ELSE inventory_stocks.unit * inventory_stocks.onhand
                    END)'))
                        ->where('onhand', '!=', 0);
                }
            ])
            ->limit(5)->get();
        return ItemResource::collection($data);
    }

    public function withdraw($request){
        $items = $request->carts;
        \DB::beginTransaction();
        try {
            foreach ($items as $item) {
                $stock = InventoryStock::where('id', $item['id'])->first();
            
                if ($stock) {
                    $quantityToDeduct = isset($item['quantity']) ? (int) $item['quantity'] : 0;
            
                    if ($stock->onhand >= $quantityToDeduct) {
                        $stock->onhand -= $quantityToDeduct; 
            
                        if ($stock->save()) {
                            $withdrawal = new InventoryWithdrawal;
                            $withdrawal->quantity = $quantityToDeduct;
                            $withdrawal->stock_id = $item['id'];
                            $withdrawal->user_id = \Auth::user()->id;
            
                            if (!$withdrawal->save()) {
                                return [
                                    'data' => [],
                                    'message' => 'Failed to save withdrawal!', 
                                    'info' => "An error occurred while saving the withdrawal record."
                                ];
                            }
                        } else {
                            return [
                                'data' => [],
                                'message' => 'Failed to update stock!', 
                                'info' => "An error occurred while updating the stock quantity."
                            ];
                        }
                    } else {
                        return [
                            'data' => [],
                            'message' => 'Insufficient stock!', 
                            'info' => "The stock quantity is not sufficient for the withdrawal."
                        ];
                    }
                } else {
                    return [
                        'data' => [],
                        'message' => 'Stock not found!', 
                        'info' => "No stock record found for ID: {$item['id']}."
                    ];
                }
            }
            \DB::commit();
            // Final response after processing all items
            return [
                'data' => [],
                'message' => 'Withdrawals were successful!', 
                'info' => "All stock quantities have been updated successfully."
            ];
        } catch (\Exception $e) {
            \DB::rollBack();
            return [
                'data' => [],
                'message' => 'Withdrawal failed!',
                'info' => "An error occurred: " . $e->getMessage()
            ];
        }
    }

    public function stock($request){
        $data = InventoryStock::create(array_merge($request->all(),[
            'code' => date('Ymdhis'),
            'onhand' => $request->quantity,
            'user_id' => \Auth::user()->id
        ]));
   
        $data = InventoryItem::query()
        ->with('category','unittype','stocks.withdrawals')
        ->where('agency_id',$this->agency)
        ->when($request->keyword, function ($query, $keyword) {
            $query->where('name', 'LIKE', "%{$keyword}%");
        })
        ->withCount([
            'stocks as onhand' => function (Builder $query) {
                $query->select(\DB::raw('SUM(onhand)'));
            }, 
            'stocks as stock' => function (Builder $query) {
                $query->select(\DB::raw('SUM(
                CASE
                    WHEN inventory_stocks.unit_id = inventory_items.unit_id THEN inventory_stocks.unit * inventory_stocks.onhand
                    WHEN inventory_stocks.unit_id = 123 AND inventory_items.unit_id = 124 THEN inventory_stocks.unit * inventory_stocks.onhand * 1000
                    WHEN inventory_stocks.unit_id = 124 AND inventory_items.unit_id = 123 THEN inventory_stocks.unit * inventory_stocks.onhand * 0.001
                    WHEN inventory_stocks.unit_id = 125 AND inventory_items.unit_id = 126 THEN inventory_stocks.unit * inventory_stocks.onhand * 0.001
                    WHEN inventory_stocks.unit_id = 126 AND inventory_items.unit_id = 125 THEN inventory_stocks.unit * inventory_stocks.onhand * 1000
                    ELSE inventory_stocks.unit * inventory_stocks.onhand
                END)'))
                    ->where('onhand', '!=', 0);
            }
        ])
        ->where('id',$request->item_id)->first();

        return [
            'data' => new ItemResource($data),
            'message' => 'Stock was added successful!', 
            'info' => "You've successfully added the new stock."
        ];
    }

    public function categories(){
        $data = ListDropdown::where('classification','Inventory')
        ->where('type','Category')->where('is_active',1)
        ->withCount(['inventory_category' => function ($query) {
            $query->where('agency_id', $this->agency);
        }])->get();
        return $data;
    }

    public function statuses(){
        return [
            'Active' => InventoryItem::where('is_active',1)->count(),
            'Inactive' => InventoryItem::where('is_active',0)->count()
        ];
    }

    public function reminders(){
        $itemsBelowReorderLevel = InventoryItem::all()->filter(function ($item) {
            return $item->isBelowReorderLevel();
        });
        $count = $itemsBelowReorderLevel->count();
        return [
            [
                'name' => 'All items',
                'description' => 'List of items',
                'count' => InventoryItem::count(),
                'icon' => 'ri-inbox-fill',
                'color' => 'bg-success-subtle text-success'
            ],
            [
                'name' => 'Expired Items',
                'description' => 'Check for expiration',
                'count' => InventoryStock::where('expired_at','<',now())->count(),
                'icon' => 'ri-error-warning-fill',
                'color' => 'bg-danger-subtle text-danger'
            ],
            [
                'name' => 'Out of Stocks',
                'description' => 'Please restock soon',
                'count' => InventoryItem::whereDoesntHave('stocks', function ($query) { $query->where('onhand', '>', 0); })->count(),
                'icon' => 'ri-alert-fill',
                'color' => 'bg-warning-subtle text-warning'
            ],
            [
                'name' => 'For Reorder',
                'description' => 'Resupply needed urgently',
                'count' => $count,
                'icon' => 'ri-shopping-cart-fill',
                'color' => 'bg-primary-subtle text-primary'
            ],
        ];
    }

    public function generateCode($request){
        $agency = Agency::where('id',$this->agency)->first();
        $c = InventoryItem::where('agency_id',$this->agency)->count();
        $code = $agency->code.'-INV-'.str_pad(($c+1), 5, '0', STR_PAD_LEFT);  
        return $code;
    }
}
