<?php

namespace App\Policies;

use App\DepartmentSection;
use App\Role;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class DepartmentSectionPolicy
{
    use HandlesAuthorization;
    
    /**
     * Determine whether the user can view any department sections.
     *
     * @param  \App\User  $user
     * @return mixed
     */


    public function viewAny(User $user)
    {
        return $user->isAdmin();
    }

    public function manage(User $user, DepartmentSection $department_section){

        if (($user->role->model_id == $department_section->id && $user->role->role_type == Role::DEPARTMENT_SECTION_ROLE_TYPE) || 
            $user->isAdmin() )

        {
            return true;
        } else{
            return false;
        }
    }

    public function manage_article(User $user, DepartmentSection $department_section)
    {
        $department_menu_ids = $department_section->menus->pluck('id')->toArray();
        //dd($department_menu_ids);

        if (($user->role->model_id == $department_section->id && $user->role->role_type == Role::DEPARTMENT_SECTION_ROLE_TYPE) || 
            $user->isAdmin() || (in_array($user->role->model_id,$department_menu_ids ) && $user->role->role_type == Role::DEPARTMENT_MENU_ROLE_TYPE))

        {
            return true;
        } else{
            return false;
        }
    }

    public function create(User $user)
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can view the department section.
     *
     * @param  \App\User  $user
     * @param  \App\DepartmentSection  $departmentSection
     * @return mixed
     */
    public function view(User $user, DepartmentSection $departmentSection)
    {
        //
    }



    /**
     * Determine whether the user can update the department section.
     *
     * @param  \App\User  $user
     * @param  \App\DepartmentSection  $departmentSection
     * @return mixed
     */
    public function update(User $user, DepartmentSection $departmentSection)
    {
        //
    }

    /**
     * Determine whether the user can delete the department section.
     *
     * @param  \App\User  $user
     * @param  \App\DepartmentSection  $departmentSection
     * @return mixed
     */
    public function delete(User $user, DepartmentSection $departmentSection)
    {
        //
    }

    /**
     * Determine whether the user can restore the department section.
     *
     * @param  \App\User  $user
     * @param  \App\DepartmentSection  $departmentSection
     * @return mixed
     */
    public function restore(User $user, DepartmentSection $departmentSection)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the department section.
     *
     * @param  \App\User  $user
     * @param  \App\DepartmentSection  $departmentSection
     * @return mixed
     */
    public function forceDelete(User $user, DepartmentSection $departmentSection)
    {
        //
    }
}
