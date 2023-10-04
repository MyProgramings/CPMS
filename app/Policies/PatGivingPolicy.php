<?php

namespace App\Policies;

use App\Models\Pat_giving;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PatGivingPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return $user->hasPermission('index_pat_givings');
    }

    public function view(User $user, Pat_giving $patGiving)
    {
        return $user->hasPermission('show_pat_givings');
    }

    public function create(User $user)
    {
        return $user->hasPermission('create_pat_givings');
    }

    public function update(User $user, Pat_giving $patGiving)
    {
        return $user->hasPermission('edit_pat_givings');
    }

    public function delete(User $user, Pat_giving $patGiving)
    {
        return $user->hasPermission('destroy_pat_givings');
    }

    public function reports(User $user)
    {
        return $user->hasPermission('reports_pat_givings');
    }

    public function search(User $user, Pat_giving $patGiving)
    {
        return $user->hasPermission('search_pat_givings');
    }
}
