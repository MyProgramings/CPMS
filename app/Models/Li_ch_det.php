<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Li_ch_det extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'list_checkup_id'];
    public function list_checkup()
    {
        return $this->belongsTo(List_checkup::class);
    }
    public function scopeSearch($query, $req){
        $query->where(function ($query) use ($req){
            $query->where('name','like', '%' . $req . '%');
        });
    }
}
