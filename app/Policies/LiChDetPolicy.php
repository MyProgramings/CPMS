<?php

namespace App\Policies;

use App\Models\Li_ch_det;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class LiChDetPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return $user->hasPermission('index_li_ch_dets');
    }

    public function view(User $user, Li_ch_det $liChDet)
    {
        return $user->hasPermission('show_li_ch_dets');
    }

    public function create(User $user)
    {
        return $user->hasPermission('create_li_ch_dets');
    }

    public function update(User $user, Li_ch_det $liChDet)
    {
        return $user->hasPermission('edit_li_ch_dets');
    }

    public function delete(User $user, Li_ch_det $liChDet)
    {
        return $user->hasPermission('destroy_li_ch_dets');
    }

    public function reports(User $user)
    {
        return $user->hasPermission('reports_li_ch_dets');
    }

    public function search(User $user, Li_ch_det $liChDet)
    {
        return $user->hasPermission('search_li_ch_dets');
    }
}

