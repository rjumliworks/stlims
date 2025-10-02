<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ListName extends Model
{
    public function subs()
    {
        return $this->hasMany('App\Models\ListName', 'parent_id');
    } 

    public function parent()
    {
        return $this->belongsTo('App\Models\ListName', 'parent_id', 'id');
    }
}
