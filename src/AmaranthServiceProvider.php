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

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {

        // Migrations
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->publishes([
            __DIR__.'/database/migrations/' => database_path('migrations')
        ], 'migrations');

        // Translations
        $this->loadTranslationsFrom(__DIR__.'/resources/lang', 'amaranth');
        $this->publishes([
            __DIR__.'/resources/lang' => resource_path('lang/vendor/amaranth'),
        ]);

        // Views
        $this->loadViewsFrom(__DIR__.'/resources/views', 'amaranth');
        $this->publishes([
            __DIR__.'/resources/views' => resource_path('views/vendor/amaranth'),
        ]);

        // Assets
        $this->publishes([
            __DIR__.'/public' => public_path('vendor/amaranth'),
        ], 'public');

    }


}