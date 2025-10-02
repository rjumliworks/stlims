<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ListSample extends Model
{
    protected $fillable = [
        'name_id','laboratory_id','agency_id'
    ];

    public function name()
    {
        return $this->belongsTo('App\Models\ListName', 'name_id', 'id');
    }

    public function laboratory()
    {
        return $this->belongsTo('App\Models\ListLaboratory', 'laboratory_id', 'id');
    }

    public function agency()
    {
        return $this->belongsTo('App\Models\Agency', 'agency_id', 'id');
    }
}
