<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Crypt;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class CustomerContact extends Model
{
    use HasFactory, LogsActivity;

    protected $fillable = [
        'email',
        'contact_no',
        'customer_id'
    ];
    
    public function customer()
    {
        return $this->belongsTo('App\Models\Customer', 'customer_id', 'id');
    }

    public function setEmailAttribute($value)
    {
        $this->attributes['email'] = Crypt::encryptString($value);
    }

    public function getEmailAttribute($value)
    {
        return Crypt::decryptString($value);
    }

    public function setContactNoAttribute($value)
    {
        $this->attributes['contact_no'] = Crypt::encryptString($value);
    }

    public function getContactNoAttribute($value)
    {
        return Crypt::decryptString($value);
    }

    public function updateIfDirty(array $attributes){
        $dirtyAttributes = [];
        foreach ($attributes as $key => $value) {
            $currentValue = $this->$key;
            if ($value !== $currentValue) {
                $dirtyAttributes[$key] = $value;
            }
        }
        if(!empty($dirtyAttributes)) {
            $originalAttributes = array_intersect_key($this->getOriginal(), $dirtyAttributes);
            $updated = $this->update($dirtyAttributes);
            return $updated;
        }
        return false;
    }
    
    public function getActivitylogOptions(): LogOptions {
        return LogOptions::defaults()
        ->logOnly(['email','contact_no'])
        ->setDescriptionForEvent(fn(string $eventName) => "{$eventName}")
        ->useLogName('Customer Contact')
        ->logOnlyDirty()
        ->dontSubmitEmptyLogs();
    }
}
