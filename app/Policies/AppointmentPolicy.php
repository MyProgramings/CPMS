<?php

namespace App\Policies;

use App\Models\Appointment;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class AppointmentPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return $user->hasPermission('index_appointments');
    }

    public function view(User $user, Appointment $appointment)
    {
        return $user->hasPermission('show_appointments');
    }

    public function create(User $user)
    {
        return $user->hasPermission('create_appointments');
    }

    public function update(User $user, Appointment $appointment)
    {
        return $user->hasPermission('edit_appointments');
    }

    public function delete(User $user, Appointment $appointment)
    {
        return $user->hasPermission('destroy_appointments');
    }

    public function reports(User $user)
    {
        return $user->hasPermission('reports_appointments');
    }

    public function search(User $user, Appointment $appointment)
    {
        return $user->hasPermission('search_appointments');
    }
}
