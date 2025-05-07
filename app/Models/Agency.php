<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Agency extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code',
        'member_since',
        'contact_no',
        'avatar',
        'is_active',
        'type_id',
        'member_id'
    ];

    public function member()
    {
        return $this->belongsTo('App\Models\Member', 'member_id', 'id');
    }

    public function type()
    {
        return $this->belongsTo('App\Models\ListDropdown', 'type_id', 'id');
    }

    public function address()
    {
        return $this->hasOne('App\Models\AgencyAddress', 'agency_id');
    }

    public function configuration()
    {
        return $this->hasOne('App\Models\AgencyConfiguration', 'agency_id');
    }

    public function fees()
    {
        return $this->morphMany('App\Models\TestserviceAddon', 'typeable');
    }

    public function getUpdatedAtAttribute($value)
    {
        return date('M d, Y g:i a', strtotime($value));
    }

    public function getCreatedAtAttribute($value)
    {
        return date('M d, Y g:i a', strtotime($value));
    }
}
