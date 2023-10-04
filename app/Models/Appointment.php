<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'reciption', 'patient_id', 'nots', 'close_appointment'];
    public function r_checkups()
    {
        return $this->hasMany(R_checkup::class, 'appointment_id');
    }
    public function r_def_meds()
    {
        return $this->hasMany(R_def_med::class, 'appointment_id');
    }
    public function pat_giving()
    {
        return $this->hasMany(Pat_giving::class, 'appointment_id');
    }
    public function psy_as()
    {
        return $this->hasMany(Psy_as::class, 'appointment_id');
    }
    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function scopeSearch($query, $req)
    {
        $query->join('patients', 'patients.id', '=', 'appointments.patient_id')
            ->select('appointments.*', 'patients.name')
            ->where('patients.name', 'like', '%' . $req . '%')
            ->orwhere('appointments.id', 'like', '%' . $req . '%');
    }
}
