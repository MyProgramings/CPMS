<?php

namespace App\Policies;

use App\Models\Inventoris;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class InventorisPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return $user->hasPermission('index_inventories');
    }

    public function view(User $user, Inventoris $inventoris)
    {
        return $user->hasPermission('show_inventories');
    }

    public function create(User $user)
    {
        return $user->hasPermission('create_inventories');
    }

    public function update(User $user, Inventoris $inventoris)
    {
        return $user->hasPermission('edit_inventories');
    }

    public function delete(User $user, Inventoris $inventoris)
    {
        return $user->hasPermission('destroy_inventories');
    }

    public function reports(User $user)
    {
        return $user->hasPermission('reports_inventories');
    }

    public function search(User $user, Inventoris $inventoris)
    {
        return $user->hasPermission('search_inventories');
    }
}
