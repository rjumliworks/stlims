<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EquipmentInfo extends Model
{
    use HasFactory;

    protected $fillable = [
        'manufacturer',
        'model',
        'serial_no',
        'price',
        'others',
        'user_id',
        'supplier_id',
        'equipment_id',
        'acquired_at'
    ];

    public function equipment()
    {
        return $this->belongsTo('App\Models\Equipment', 'equipment_id', 'id');
    }

    public function supplier()
    {
        return $this->belongsTo('App\Models\InventorySupplier', 'supplier_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }

    public function setPriceAttribute($value)
    {
        $this->attributes['price'] = trim(str_replace(',','',$value),'₱');
    }

    public function getPriceAttribute($value)
    {
        return '₱'.number_format($value,2,'.',',');
    }
}
