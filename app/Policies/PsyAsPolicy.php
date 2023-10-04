<?php

namespace App\Policies;

use App\Models\Psy_as;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PsyAsPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return $user->hasPermission('index_psy_as');
    }

    public function view(User $user, Psy_as $psyAs)
    {
        return $user->hasPermission('show_psy_as');
    }

    public function create(User $user)
    {
        return $user->hasPermission('create_psy_as');
    }

    public function update(User $user, Psy_as $psyAs)
    {
        return $user->hasPermission('edit_psy_as');
    }

    public function delete(User $user, Psy_as $psyAs)
    {
        return $user->hasPermission('destroy_psy_as');
    }

    public function reports(User $user)
    {
        return $user->hasPermission('reports_psy_as');
    }

    public function search(User $user, Psy_as $psyAs)
    {
        return $user->hasPermission('search_psy_as');
    }
}
