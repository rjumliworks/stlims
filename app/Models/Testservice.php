<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testservice extends Model
{
    use HasFactory;

    protected $fillable = [
        'laboratory_id','sampletype_id','testname_id','method_id','agency_id','is_active'
    ];

    public function sampletype()
    {
        return $this->belongsTo('App\Models\TestserviceName', 'sampletype_id', 'id');
    }

    public function testname()
    {
        return $this->belongsTo('App\Models\TestserviceName', 'testname_id', 'id');
    }

    public function method()
    {
        return $this->belongsTo('App\Models\TestserviceMethod', 'method_id', 'id');
    }
    
    public function agency()
    {
        return $this->belongsTo('App\Models\Agency', 'agency_id', 'id');
    }

    public function laboratory()
    {
        return $this->belongsTo('App\Models\ListLaboratory', 'laboratory_id', 'id');
    }
    
    public function getUpdatedAtAttribute($value)
    {
        return date('M d, Y g:i a', strtotime($value));
    }

    public function getCreatedAtAttribute($value)
    {
        return date('M d, Y g:i a', strtotime($value));
    }

    public function fees()
    {
        return $this->morphMany('App\Models\TestserviceAddon', 'typeable');
    }
}
