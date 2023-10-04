<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'age', 'place_of_birth', 'Birthday', 'gender', 'social_status',
        'profession', 'nationality', 'card_number', 'permanent_address', 'temporary_address',
        'near_mosque', 'phone_number', 'file_number', 'file_colors', 'incident_date',
        'previous_treatment', 'chemotherapy', 'radiotherapy', 'surgery', 'site_of_tumor',
        'type_of_tumor', 'status', 'doctors_name', 'speciality', 'reported_by', 'is_smokeout',
        'is_khat', 'is_chwingtobaco', 'date_of_last_contact', 'cause_of_death', 'notes_re'
    ];
    public function appointment()
    {
        return $this->hasMany(Appointment::class, 'patient_id');
    }
    public function psy_as()
    {
        return $this->hasMany(Psy_as::class, 'patient_id');
    }
    public function soc_as()
    {
        return $this->hasMany(Soc_as::class, 'patient_id');
    }
    public function r_checkups()
    {
        return $this->hasMany(R_checkup::class, 'patient_id');
    }
    public function r_def_meds()
    {
        return $this->hasMany(R_def_med::class, 'patient_id');
    }
    public function pat_givings()
    {
        return $this->hasMany(Pat_giving::class, 'patient_id');
    }
    public function scopeSearch($query, $req)
    {
        $query->where(function ($query) use ($req) {
            $query->where('name', 'like', '%' . $req . '%')->orWhere('file_number', 'like', '%' . $req . '%')->orWhere('file_colors', 'like', '%' . $req . '%');
        });
    }
}
