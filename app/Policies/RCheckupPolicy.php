<?php

namespace App\Policies;

use App\Models\R_checkup;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class RCheckupPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return $user->hasPermission('index_r_checkups');
    }

    public function view(User $user, R_checkup $rCheckup)
    {
        return $user->hasPermission('show_r_checkups');
    }

    public function create(User $user)
    {
        return $user->hasPermission('create_r_checkups');
    }

    public function update(User $user, R_checkup $rCheckup)
    {
        return $user->hasPermission('edit_r_checkups');
    }

    public function delete(User $user, R_checkup $rCheckup)
    {
        return $user->hasPermission('destroy_r_checkups');
    }

    public function reports(User $user)
    {
        return $user->hasPermission('reports_r_checkups');
    }

    public function search(User $user, R_checkup $rCheckup)
    {
        return $user->hasPermission('search_r_checkups');
    }
}
