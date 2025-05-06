<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class LocationProvince extends Model
{
    use HasFactory,LogsActivity;

    public $timestamps = false;
    protected $primaryKey = 'code';
    protected $keyType = 'string';

    public function region()
    {
        return $this->belongsTo('App\Models\LocationRegion', 'region_code', 'code');
    }

    public function municipalities()
    {
        return $this->hasMany('App\Models\LocationMunicipality', 'province_code');
    } 

    public function customers()
    {
        return $this->hasMany('App\Models\Address', 'province_code');
    } 

    public function address()
    {
        return $this->hasMany('App\Models\Address', 'province_code');
    } 

    protected static $recordEvents = ['updated','created'];

    public function getActivitylogOptions(): LogOptions {
        return LogOptions::defaults()
        ->logOnly(['name','old_name','region_code'])
        ->setDescriptionForEvent(fn(string $eventName) => "$eventName the province details")
        ->useLogName('Province')
        ->logOnlyDirty()
        ->dontSubmitEmptyLogs();
    }
}
