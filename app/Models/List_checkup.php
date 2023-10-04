<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class List_checkup extends Model
{
    use HasFactory;
    protected $fillable = ['name'];
    public function li_ch_dets()
    {
        return $this->hasMany(Li_ch_det::class, 'list_checkup_id');
    }
}
