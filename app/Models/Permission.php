<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'key', 'table_name'];

    public function role()
    {
        return $this->belongsToMany(Role::class);
    }

    public static function generateFor($table_name)
    {
        self::firstOrCreate(['name' => 'index ' . $table_name, 'key' => 'index_' . $table_name,  'table_name' => $table_name]);
        self::firstOrCreate(['name' => 'show ' . $table_name,  'key' => 'show_' . $table_name,   'table_name' => $table_name]);
        self::firstOrCreate(['name' => 'create ' . $table_name, 'key' => 'create_' . $table_name, 'table_name' => $table_name]);
        self::firstOrCreate(['name' => 'edit ' . $table_name,  'key' => 'edit_' . $table_name,   'table_name' => $table_name]);
        self::firstOrCreate(['name' => 'destroy ' . $table_name, 'key' => 'destroy_' . $table_name, 'table_name' => $table_name]);
        self::firstOrCreate(['name' => 'reports ' . $table_name, 'key' => 'reports_' . $table_name, 'table_name' => $table_name]);
        self::firstOrCreate(['name' => 'search ' . $table_name, 'key' => 'search_' . $table_name, 'table_name' => $table_name]);
    }
}
