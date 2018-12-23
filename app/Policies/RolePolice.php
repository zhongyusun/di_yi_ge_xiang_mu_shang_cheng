<?php

namespace App\Policies;

use App\User;
use App\Models\Role;
use Illuminate\Auth\Access\HandlesAuthorization;

class RolePolice
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the role.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Role  $role
     * @return mixed
     */
    public function view(User $user, Role $role)
    {
        //
    }

    /**
     * Determine whether the user can create roles.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the role.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Role  $role
     * @return mixed
     */
    public function update(User $user, Role $role)
    {
        return $role['name'] != 'webmaster';//不能更新角色为站长的权限

    }

    /**
     * Determine whether the user can delete the role.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Role  $role
     * @return mixed
     */
    public function delete(User $user, Role $role)
    {
        return $role['name'] != 'webmaster';//不能删除角色为站长的角色
    }

    /**
     * Determine whether the user can restore the role.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Role  $role
     * @return mixed
     */
    public function restore(User $user, Role $role)
    {
    }

    /**
     * Determine whether the user can permanently delete the role.
     *
     * @param  \App\User  $user
     * @param  \App\Models\Role  $role
     * @return mixed
     */
    public function forceDelete(User $user, Role $role)
    {
        //
    }
}
