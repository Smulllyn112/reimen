<?php

namespace App\Policies;

use App\DepartmentMenu;
use App\Role;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class DepartmentMenuPolicy
{
    use HandlesAuthorization;
    
    /**
     * Determine whether the user can view any department menus.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    public function manage(User $user, DepartmentMenu $department_menu){

        if (($user->role->model_id == $department_menu->department_section->id && $user->role->role_type == Role::DEPARTMENT_SECTION_ROLE_TYPE) || 
            $user->isAdmin() || ($user->role->model_id==$department_menu->id && $user->role->role_type == Role::DEPARTMENT_MENU_ROLE_TYPE)   )

        {
            return true;
        } else{
            return false;
        }
    }

    /**
     * Determine whether the user can view the department menu.
     *
     * @param  \App\User  $user
     * @param  \App\DepartmentMenu  $departmentMenu
     * @return mixed
     */
    public function view(User $user, DepartmentMenu $departmentMenu)
    {
        //
    }

    /**
     * Determine whether the user can create department menus.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the department menu.
     *
     * @param  \App\User  $user
     * @param  \App\DepartmentMenu  $departmentMenu
     * @return mixed
     */
    public function update(User $user, DepartmentMenu $departmentMenu)
    {
        //
    }

    /**
     * Determine whether the user can delete the department menu.
     *
     * @param  \App\User  $user
     * @param  \App\DepartmentMenu  $departmentMenu
     * @return mixed
     */
    public function delete(User $user, DepartmentMenu $departmentMenu)
    {
        //
    }

    /**
     * Determine whether the user can restore the department menu.
     *
     * @param  \App\User  $user
     * @param  \App\DepartmentMenu  $departmentMenu
     * @return mixed
     */
    public function restore(User $user, DepartmentMenu $departmentMenu)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the department menu.
     *
     * @param  \App\User  $user
     * @param  \App\DepartmentMenu  $departmentMenu
     * @return mixed
     */
    public function forceDelete(User $user, DepartmentMenu $departmentMenu)
    {
        //
    }
}
