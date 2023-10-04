<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class R_def_med extends Model
{
    use HasFactory;
    protected $fillable = [
        'appointment_id', 'user_id', 'patient_id', 'pharmacist', 'preparer', 'inventoris_id',
        'quantity', 'quantity_total', 'medicine_type', 'power', 'each_day', 'duration', 'confirm_med', 'confirm', 'description_medic'
    ];
    public function appointment()
    {
        return $this->belongsTo(Appointment::class);
    }
    public function inventoris()
    {
        return $this->belongsTo(Inventoris::class);
    }
    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
    public function pat_giving()
    {
        return $this->hasMany(Pat_giving::class, 'r_def_med_id');
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function scopeSearch($query, $req)
    {
        $query->where(function ($query) use ($req) {
            $query->where('date', 'like', '%' . $req . '%');
        });
    }
}
