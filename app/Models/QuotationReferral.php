<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class QuotationReferral extends Model
{
    use HasFactory,LogsActivity;
    
    protected $fillable = [
        'is_psto', 'province_code', 'agency_id', 'quotation_id'
    ];

    public function quotation()
    {
        return $this->belongsTo('App\Models\Quotation', 'quotation_id', 'id');
    }

    public function agency()
    {
        return $this->belongsTo('App\Models\Agency', 'agency_id', 'id');
    }

    public function province()
    {
        return $this->belongsTo('App\Models\LocationProvince', 'province_code', 'code');
    }

    public function getUpdatedAtAttribute($value)
    {
        return date('M d, Y g:i a', strtotime($value));
    }

    public function getCreatedAtAttribute($value)
    {
        return date('M d, Y g:i a', strtotime($value));
    }

    public function getActivitylogOptions(): LogOptions {
        return LogOptions::defaults()
        ->logOnly( ['is_psto', 'province_code', 'agency_id', 'quotation_id'])
        ->setDescriptionForEvent(fn(string $eventName) => "{$eventName}")
        ->useLogName('Referral')
        ->logOnlyDirty()
        ->dontSubmitEmptyLogs();
    }
}
