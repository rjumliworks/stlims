<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AgencyConfiguration extends Model
{
    use HasFactory;

    protected $casts = [
        'laboratories' => 'array',
        'form' => 'array',
        'contact' => 'array',
    ];
    
    protected $fillable = [
        'code','name','acronym','sample_count','tsr_count','laboratories','form','samplecode_year','agency_id'
    ];

    public function agency()
    {
        return $this->belongsTo('App\Models\Agency', 'agency_id', 'id');
    }

    public function getLaboratoriesAttribute($value)
    {
        return json_decode($value, true); 
    }

    public function getFormAttribute($value)
    {
        return is_string($value) ? json_decode($value, true) : $value;
    }
}
