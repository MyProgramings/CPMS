<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\Appointment;
use App\Models\Inventoris;
use App\Models\Li_ch_det;
use App\Models\List_checkup;
use App\Models\Pat_giving;
use App\Models\Patient;
use App\Models\Permission;
use App\Models\Psy_as;
use App\Models\R_checkup;
use App\Models\R_def_med;
use App\Models\Role;
use App\Models\Soc_as;
use App\Models\User;
use App\Policies\AppointmentPolicy;
use App\Policies\InventorisPolicy;
use App\Policies\LiChDetPolicy;
use App\Policies\ListCheckupPolicy;
use App\Policies\PatGivingPolicy;
use App\Policies\PatientPolicy;
use App\Policies\PermissionPolicy;
use App\Policies\PsyAsPolicy;
use App\Policies\RCheckupPolicy;
use App\Policies\RDefMedPolicy;
use App\Policies\RolePolicy;
use App\Policies\SocAsPolicy;
use App\Policies\UserPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        Appointment::class=>AppointmentPolicy::class,
        Inventoris::class=>InventorisPolicy::class,
        Li_ch_det::class=>LiChDetPolicy::class,
        List_checkup::class=>ListCheckupPolicy::class,
        Pat_giving::class=>PatGivingPolicy::class,
        Patient::class=>PatientPolicy::class,
        Permission::class=>PermissionPolicy::class,
        Psy_as::class=>PsyAsPolicy::class,
        R_checkup::class=>RCheckupPolicy::class,
        R_def_med::class=>RDefMedPolicy::class,
        Role::class=>RolePolicy::class,
        Soc_as::class=>SocAsPolicy::class,
        User::class=>UserPolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
