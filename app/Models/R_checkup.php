<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class R_checkup extends Model
{
    use HasFactory;
    protected $fillable = [
        'list_checkup_id', 'li_ch_det_id', 'large_value', 'small_value', 'description_check', 'description_res', 'appointment_id',
        'patient_id', 'user_id', 'laboratorie'
    ];
    public function appointment()
    {
        return $this->belongsTo(Appointment::class);
    }
    public function list_checkup()
    {
        return $this->belongsTo(List_checkup::class);
    }
    public function li_ch_det()
    {
        return $this->belongsTo(Li_ch_det::class);
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
        $query->where(function ($query) use ($req) {
            $query->where('description_res', 'like', '%' . $req . '%')
                ->orWhere('doctor', 'like', '%' . $req . '%')
                ->orWhere('laboratorie', 'like', '%' . $req . '%');
        });
    }
}
