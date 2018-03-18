<?php

namespace OpenAAC\Account\Creation\Providers;

use Illuminate\Support\AggregateServiceProvider as ServiceProvider;

class PackageServiceProvider extends ServiceProvider
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
