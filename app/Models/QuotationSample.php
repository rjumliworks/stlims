<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuotationSample extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'customer_description',
        'description',
        'sampletype_id',
        'quotation_id',
    ];

    public function sample()
    {
        return $this->belongsTo('App\Models\ListName', 'sampletype_id', 'id');
    }

    public function quotation()
    {
        return $this->belongsTo('App\Models\Quotation', 'quotation_id', 'id');
    }
    
    public function analyses()
    {
        return $this->hasMany('App\Models\QuotationAnalysis', 'sample_id');
    }

    public function getUpdatedAtAttribute($value)
    {
        return date('M d, Y g:i a', strtotime($value));
    }

    public function getCreatedAtAttribute($value)
    {
        return date('M d, Y g:i a', strtotime($value));
    }

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
    }
}
