<?php

namespace App\Policies;

use App\Models\Pedido;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PedidoPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any pedidos.
     */
    public function viewAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can view the pedido.
     */
    public function view(User $user, Pedido $pedido)
    {
        return $user->id === $pedido->user_id || $user->isAdmin();
    }

    /**
     * Determine whether the user can create pedidos.
     */
    public function create(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can update the pedido.
     */
    public function update(User $user, Pedido $pedido)
    {
        return $user->id === $pedido->user_id || $user->isAdmin();
    }

    /**
     * Determine whether the user can delete the pedido.
     */
    public function delete(User $user, Pedido $pedido)
    {
        return $user->id === $pedido->user_id || $user->isAdmin();
    }
}

