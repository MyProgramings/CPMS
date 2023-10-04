<?php

namespace App\Policies;

use App\Models\Patient;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PatientPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return $user->hasPermission('index_patients');
    }

    public function view(User $user, Patient $patient)
    {
        return $user->hasPermission('show_patients');
    }

    public function create(User $user)
    {
        return $user->hasPermission('create_patients');
    }

    public function update(User $user, Patient $patient)
    {
        return $user->hasPermission('edit_patients');
    }

    public function delete(User $user, Patient $patient)
    {
        return $user->hasPermission('destroy_patients');
    }

    public function reports(User $user)
    {
        return $user->hasPermission('reports_patients');
    }

    public function search(User $user, Patient $patient)
    {
        return $user->hasPermission('search_patients');
    }
}
