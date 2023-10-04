<?php

namespace App\Policies;

use App\Models\Soc_as;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class SocAsPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return $user->hasPermission('index_soc_as');
    }

    public function view(User $user, Soc_as $socAs)
    {
        return $user->hasPermission('show_soc_as');
    }

    public function create(User $user)
    {
        return $user->hasPermission('create_soc_as');
    }

    public function update(User $user, Soc_as $socAs)
    {
        return $user->hasPermission('edit_soc_as');
    }

    public function delete(User $user, Soc_as $socAs)
    {
        return $user->hasPermission('destroy_soc_as');
    }

    public function reports(User $user)
    {
        return $user->hasPermission('reports_soc_as');
    }

    public function search(User $user, Soc_as $socAs)
    {
        return $user->hasPermission('search_soc_as');
    }
}
