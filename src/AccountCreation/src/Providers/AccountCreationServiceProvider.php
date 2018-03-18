<?php

namespace pandaac\Account\Creation\Providers;

use Illuminate\Support\AggregateServiceProvider as ServiceProvider;

class AccountCreationServiceProvider extends ServiceProvider
{
    /**
     * The provider class names.
     *
     * @var array
     */
    protected $providers = [
        RouteServiceProvider::class,
        ViewServiceProvider::class,
    ];
}
