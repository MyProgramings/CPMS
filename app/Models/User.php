<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Cache;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    public bool $showCreateModel = false;
    public function showCreateModel(){
        $this->showCreateModel = true;
    }
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
        'role_id',
        'last_seen',
        'profile_photo_path',
    ];

    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $appends = [
        'profile_photo_url',
    ];
    public function setUsernameAttribute($value)
    {
        $this->attributes['username'] = strtolower($value);
    }
    public function role()
    {
        return $this->belongsTo(Role::class);
    }
    public function hasPermission($key)
    {
        return $this->role->permission->contains('key', $key);
    }
    public function appointments()
    {
        return $this->hasMany(Appointment::class, 'user_id');
    }
    public function r_checkup()
    {
        return $this->hasMany(R_checkup::class, 'user_id');
    }
    public function r_def_med()
    {
        return $this->hasMany(R_def_med::class, 'user_id');
    }
    public function psy_as()
    {
        return $this->hasMany(Psy_as::class, 'user_id');
    }
    public function soc_as()
    {
        return $this->hasMany(Soc_as::class, 'user_id');
    }
    public function scopeSearch($query, $req){
        $query->where(function ($query) use ($req){
            $query->where('name','like', '%' . $req . '%')
                ->orWhere('username','like', '%' . $req . '%');
        });
    }
    public function isOnline(){
        return Cache::has('user-is-online' .$this->id);
    }
}
