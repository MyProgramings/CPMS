<?php

namespace App\Policies;

use App\Models\Permission;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PermissionPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return $user->hasPermission('index_permissions');
    }

    public function view(User $user, Permission $permission)
    {
        return $user->hasPermission('show_permissions');
    }

    public function create(User $user)
    {
        return $user->hasPermission('create_permissions');
    }

    public function update(User $user, Permission $permission)
    {
        return $user->hasPermission('edit_permissions');
    }

    public function delete(User $user, Permission $permission)
    {
        return $user->hasPermission('destroy_permissions');
    }

    public function reports(User $user)
    {
        return $user->hasPermission('reports_permissions');
    }

    public function search(User $user, Permission $permission)
    {
        return $user->hasPermission('search_permissions');
    }
}
