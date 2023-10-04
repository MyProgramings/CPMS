<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Psy_as extends Model
{
    use HasFactory;
    protected $fillable = [
        'dorm', 'delicacies', 'memory', 'edgy_and_adenological',
        'ailment_precognition', 'direction_social', 'thinking_in_Disease', 'medicament_traces', 'psycho_traces',
        'proposals_and_recommendations', 'notes_psy', 'ps_as', 'user_id', 'patient_id', 'appointment_id'
    ];
    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
    public function appointment()
    {
        return $this->belongsTo(Appointment::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function scopeSearch($query, $req)
    {
        $query->join('patients', 'patients.id', '=', 'psy_as.patient_id')
        ->select('psy_as.*', 'patients.name')
        ->where('patients.name', 'like', '%' . $req . '%')
        ->orwhere('psy_as.id', 'like', '%' . $req . '%');
    }
}
