<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pat_giving extends Model
{
    use HasFactory;
    protected $fillable = [
        'giver', 'appointment_id', 'patient_id', 'r_def_med_id',
        'bp', 't', 'p', 'r', 'pain', 'wt', 'ht', 'bsa', 'VAD', 'ES', 'cycle', 'day',
        'referred_doctor', 'check_in', 'registry_sheet', 'pathology_report', 'radiology_report', 'previous_ctx',
        'CTX_pre_date', 'ctx_previous_cycle_date', 'pre_ctx_lab_test', 'health_cente_visit',
        'Inc_of_fever_bet_cyc', 'If_yes_value', 'Does_pthave_thermometer', 'new_complain', 'appointment_of_the_two_cycle',
        'nursing_notes', 'doctor_note'
    ];
    public function appointment()
    {
        return $this->belongsTo(Appointment::class);
    }
    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
    public function r_def_med()
    {
        return $this->belongsTo(R_def_med::class);
    }
}
