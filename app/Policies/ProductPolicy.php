<?php

namespace App\Policies;

use App\ModelsProduct;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProductPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\ModelsProduct  $modelsProduct
     * @return mixed
     */
    public function view(User $user, ModelsProduct $modelsProduct)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //

        // $users = Auth::find('1');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\ModelsProduct  $modelsProduct
     * @return mixed
     */
    public function update(User $user, ModelsProduct $modelsProduct)
    {
        //

        return $users->id === $products->user_id;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\ModelsProduct  $modelsProduct
     * @return mixed
     */
    public function delete(User $user, ModelsProduct $modelsProduct)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\ModelsProduct  $modelsProduct
     * @return mixed
     */
    public function restore(User $user, ModelsProduct $modelsProduct)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\ModelsProduct  $modelsProduct
     * @return mixed
     */
    public function forceDelete(User $user, ModelsProduct $modelsProduct)
    {
        //
    }
}
