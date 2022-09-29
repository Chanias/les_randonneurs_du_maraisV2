<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Carte;
use Illuminate\Auth\Access\HandlesAuthorization;

class CartePolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function before(User $user)
    {
        if ($user->isAdmin()) {
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
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Carte  $carte
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Carte $carte)
    {
        switch ($user->role) {
            case 'Animateur':
                return true;
            case 'Baliseur':
                return true;
            default:
                return false;
        }
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        switch ($user->role) {
            case 'Animateur':
                return true;
            case 'Baliseur':
                return true;
            default:
                return false;
        }
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Carte  $carte
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Carte $carte)
    {
        switch ($user->role) {
            case 'Animateur':
                return true;
            case 'Baliseur':
                return true;
            default:
                return false;
        }
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Carte  $carte
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Carte $carte)
    {
        switch ($user->role) {
            case 'Animateur':
                return true;
            case 'Baliseur':
                return true;
            default:
                return false;
        }
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Carte  $carte
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Carte $carte)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Carte  $carte
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Carte $carte)
    {
        //
    }
}
