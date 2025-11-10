<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\LogOptions;

class UserProfile extends Model
{
    use HasFactory, LogsActivity;

    protected $guarded = [];
    protected $fillable = ['firstname', 'lastname', 'middlename','suffix','sex','mobile','mobile','user_id', 'avatar','facility_id'];
    protected $appends = ['name','fullname'];

    public function getFullnameAttribute()
    {
        $middleInitial = $this->middlename ? strtoupper($this->middlename[0]) . '.' : '';
        $name = trim("{$this->firstname} {$middleInitial} {$this->lastname}");
        if ($this->suffix) {
            $name .= ', ' . $this->suffix;
        }
        return $name;
    }

    public function getNameAttribute()
    {
        $middleInitial = $this->middlename ? strtoupper($this->middlename[0]) . '.' : '';
        $parts = [trim($this->lastname) . ',', trim($this->firstname), $middleInitial, $this->suffix];
        return implode(' ', array_filter($parts));
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }

    public function facility()
    {
        return $this->belongsTo('App\Models\AgencyFacility', 'facility_id', 'id');
    }

    public function setFirstnameAttribute($value)
    {
        $this->attributes['firstname'] = ucwords(strtolower($value));
    }

    public function setLastnameAttribute($value)
    {
        $this->attributes['lastname'] = ucwords(strtolower($value));
    }

    public function setMiddlenameAttribute($value)
    {
        $this->attributes['middlename'] = ucwords(strtolower($value));
    }

    protected static $recordEvents = ['updated'];
    public function getActivitylogOptions(): LogOptions {
        return LogOptions::defaults()
        ->logOnly(['firstname','lastname','middlename','sex'])
        ->setDescriptionForEvent(fn(string $eventName) => "$eventName the profile information")
        ->useLogName('User Profile')
        ->logOnlyDirty()
        ->dontSubmitEmptyLogs();
    }
}
