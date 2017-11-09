<?php

namespace OllieFordandCo\Amaranth;

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
        $this->mergeConfigFrom(
            __DIR__ . '/../config/amaranth.php', 'amaranth'
        );

        $this->app->singleton('OllieFordandCo\Amaranth\Contracts\Factory', function ($app) {
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
        return ['OllieFordandCo\Amaranth\Contracts\Factory'];
    }

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->package('OllieFordandCo/Amaranth', 'amaranth');

        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');

        // Migrations
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
        $this->publishes([
            __DIR__ . '/../database/migrations/' => database_path('migrations')
        ], 'amaranth-migrations');

        // Translations
        $this->loadTranslationsFrom(__DIR__ . '/../resources/lang', 'amaranth');
        $this->publishes([
            __DIR__ . '/../resources/lang' => resource_path('lang/vendor/amaranth'),
        ], 'amaranth-translations');

        // Views
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'amaranth');
        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/amaranth'),
        ], 'amaranth-views');

        // Config
        $this->publishes([
            __DIR__ . '/../config/amaranth.php' => config_path('amaranth.php'),
        ], 'amaranth-config');

        // Assets
        $this->publishes([
            __DIR__ . '/../public' => public_path('vendor/amaranth'),
        ], 'amaranth-public');

    }


}