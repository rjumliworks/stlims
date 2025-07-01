<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TargetBreakdown extends Model
{
    use HasFactory;

    protected $fillable = ['name','count','accom','is_consolidated','is_amount','laboratory_id','target_id','user_id'];

    public function laboratory()
    {
        return $this->belongsTo('App\Models\ListLaboratory', 'laboratory_id', 'id');
    }

    public function target()
    {
        return $this->belongsTo('App\Models\Target', 'target_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }
}
