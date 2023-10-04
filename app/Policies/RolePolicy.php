<?php

namespace App\Policies;

use App\Models\Role;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class RolePolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return $user->hasPermission('index_roles');
    }

    public function view(User $user, Role $role)
    {
        return $user->hasPermission('show_roles');
    }

    public function create(User $user)
    {
        return $user->hasPermission('create_roles');
    }

    public function update(User $user, Role $role)
    {
        return $user->hasPermission('edit_roles');
    }

    public function delete(User $user, Role $role)
    {
        return $user->hasPermission('destroy_roles');
    }

    public function reports(User $user)
    {
        return $user->hasPermission('reports_roles');
    }

    public function search(User $user, Role $role)
    {
        return $user->hasPermission('search_roles');
    }
}
