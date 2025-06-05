<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Crypt;

class TsrReport extends Model
{
    use HasFactory;

    protected $fillable = ['information','tsr_id','secret_key'];

    public function tsr()
    {
        return $this->belongsTo('App\Models\Tsr', 'tsr_id', 'id');
    }

    public function setSecretKeyAttribute($value)
    {
        $this->attributes['secret_key'] = Crypt::encryptString($value);
    }

    public function getSecretKeyAttribute($value)
    {
        return Crypt::decryptString($value);
    }

    public function setInformationAttribute($value)
    {
        $this->attributes['information'] = Crypt::encryptString($value);
    }

    public function getInformationAttribute($value)
    {
        return Crypt::decryptString($value);
    }
}
