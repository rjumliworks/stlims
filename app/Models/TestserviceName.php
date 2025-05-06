<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestserviceName extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','short','type_id','laboratory_id','is_active'
    ];

    public function type()
    {
        return $this->belongsTo('App\Models\ListDropdown', 'type_id', 'id');
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
}
