<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TargetBreakdown extends Model
{
    use HasFactory;

    protected $fillable = ['name','count','is_consolidated','is_amount','laboratory_id','target_id'];

    public function laboratory()
    {
        return $this->belongsTo('App\Models\ListLaboratory', 'laboratory_id', 'id');
    }

    public function target()
    {
        return $this->belongsTo('App\Models\Target', 'target_id', 'id');
    }
}
