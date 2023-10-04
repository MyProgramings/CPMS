<?php

namespace App\Policies;

use App\Models\List_checkup;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ListCheckupPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return $user->hasPermission('index_list_checkups');
    }

    public function view(User $user, List_checkup $listCheckup)
    {
        return $user->hasPermission('show_list_checkups');
    }

    public function create(User $user)
    {
        return $user->hasPermission('create_list_checkups');
    }

    public function update(User $user, List_checkup $listCheckup)
    {
        return $user->hasPermission('edit_list_checkups');
    }

    public function delete(User $user, List_checkup $listCheckup)
    {
        return $user->hasPermission('destroy_list_checkups');
    }

    public function reports(User $user)
    {
        return $user->hasPermission('reports_list_checkups');
    }

    public function search(User $user, List_checkup $listCheckup)
    {
        return $user->hasPermission('search_list_checkups');
    }
}
