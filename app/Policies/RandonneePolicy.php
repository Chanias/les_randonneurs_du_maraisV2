<?php

namespace App\Policies;

use App\Models\Randonnee;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Auth;

class RandonneePolicy
{
    use HandlesAuthorization;

    public function before(User $user){
        if($user -> isAdmin()){
            return true;
        }
       }

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Randonnee  $randonnee
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Randonnee $randonnee)
    {
       
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
       
        // if ($this-> role->role=='Bureau'){
        //     return true;
        // }
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Randonnee  $randonnee
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Randonnee $model)
    {
        // if ($this-> role->role=='Bureau'){
        //     return true;
        // }
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Randonnee  $randonnee
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Randonnee $randonnee)
    {
        // if ($this-> role->role=='Bureau'){
        //     return true;
        // }
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Randonnee  $randonnee
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Randonnee $randonnee)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Randonnee  $randonnee
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Randonnee $randonnee)
    {
        //
    }
}