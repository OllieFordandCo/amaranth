<?php

namespace Mdl\Amaranth;

use Illuminate\Support\ServiceProvider;

class AmaranthServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('Mdl\Amaranth\Contracts\Factory', function ($app) {
            return new Engine($app);
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['Mdl\Amaranth\Contracts\Factory'];
    }
}