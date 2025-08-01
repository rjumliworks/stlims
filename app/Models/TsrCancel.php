<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TsrCancel extends Model
{
    protected $fillable = [
        'reason'
    ];

    public function cancellable()
    {
        return $this->morphTo();
    }
}
