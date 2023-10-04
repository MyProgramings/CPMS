<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventoris extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'quantity', 'power', 'medicines_shape', 'medicine_type',
        'complete_date', 'notes_inv', 'price', 'store_keeper'
    ];
    public function r_def_meds()
    {
        return $this->hasMany(R_def_med::class, 'inventoris_id');
    }
    public function scopeSearch($query, $req)
    {
        $query->where(function ($query) use ($req) {
            $query->where('name', 'like', '%' . $req . '%');
        });
    }
}
