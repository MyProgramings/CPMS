<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soc_as extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'so_as', 'patient_id', 'appointment_id',
        'monthly_incomes', 'incomes_source', 'living_kind', 'rent', 'master_name', 'master_phone',
        'pre_infestation', 'post_infestation',
        'infestation_date', 'traveling', 'other_infestation_from_family',
        'disease_kind', 'problem_rating', 'Doctor_view_of_patient', 'sociologist_appreciations'
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
        $query->join('patients', 'patients.id', '=', 'soc_as.patient_id')
        ->select('soc_as.*', 'patients.name')
        ->where('patients.name', 'like', '%' . $req . '%')
        ->orwhere('soc_as.id', 'like', '%' . $req . '%');
    }
}
