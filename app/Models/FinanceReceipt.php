<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinanceReceipt extends Model
{
    use HasFactory;

    protected $fillable = [
        'number',
        'op_id',
        'orseries_id',
        'deposit_id',
        'created_by',
        'agency_id',
        'is_deposited'
    ];
    
    // public function wallet()
    // {
    //     return $this->hasMany('App\Models\WalletTransaction', 'receipt_id');
    // }

    public function wallet()
    {
        return $this->morphOne('App\Models\WalletTransaction', 'transacable');
    }

    public function detail()
    {
        return $this->hasOne('App\Models\FinanceReceiptDetail', 'receipt_id');
    }

    public function deposit()
    {
        return $this->belongsTo('App\Models\ListDropdown', 'deposit_id', 'id');
    }

    public function op()
    {
        return $this->belongsTo('App\Models\FinanceOp', 'op_id', 'id');
    }

    // public function payor()
    // {
    //     return $this->belongsTo('App\Models\Customer', 'payor_id', 'id');
    // }

    public function createdby()
    {
        return $this->belongsTo('App\Models\User', 'created_by', 'id');
    }

    public function agency()
    {
        return $this->belongsTo('App\Models\Agency', 'agency_id', 'id');
    }

    public function transaction()
    {
        return $this->morphOne('App\Models\WalletTransaction', 'transacable');
    }

    public function getCreatedAtAttribute($value)
    {
        return date('F d, Y', strtotime($value));
    }
}
