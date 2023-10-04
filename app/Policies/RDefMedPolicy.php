<?php

namespace App\Policies;

use App\Models\R_def_med;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class RDefMedPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return $user->hasPermission('index_r_def_meds');
    }

    public function view(User $user, R_def_med $rDefMed)
    {
        return $user->hasPermission('show_r_def_meds');
    }

    public function create(User $user)
    {
        return $user->hasPermission('create_r_def_meds');
    }

    public function update(User $user, R_def_med $rDefMed)
    {
        return $user->hasPermission('edit_r_def_meds');
    }

    public function delete(User $user)
    {
        return $user->hasPermission('destroy_r_def_meds');
    }

    public function reports(User $user)
    {
        return $user->hasPermission('reports_r_def_meds');
    }

    public function search(User $user, R_def_med $rDefMed)
    {
        return $user->hasPermission('search_r_def_meds');
    }
}
