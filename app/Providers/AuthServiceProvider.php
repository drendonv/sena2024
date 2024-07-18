<?php

namespace App\Providers;

use App\Models\Pedido;
use App\Policies\PedidoPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        Pedido::class => PedidoPolicy::class,
    ];

    public function boot(): void
    {
        $this->registerPolicies();
    }
}
