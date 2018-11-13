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
     * List of commands to register for the package
     *
     * @var array
     */
    protected $commands = [
        'OllieFordandCo\Amaranth\Commands\InstallCommand'
    ];

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {

        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');

        // Migrations
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');

        // Translations
        $this->loadTranslationsFrom(__DIR__ . '/../resources/lang', 'amaranth');

        // Views
        $this->loadViewsFrom(__DIR__ . '/../resources/views/scaffold', 'amaranth');

        // Views
        $this->loadViewsFrom(__DIR__ . '/../resources/views/vendor', 'amaranth');

        if ($this->app->runningInConsole()) {
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


    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->commands($this->commands);

        $this->mergeConfigFrom(
            __DIR__ . '/../config/amaranth.php', 'amaranth'
        );

        $this->app->singleton('OllieFordandCo\Amaranth\Contracts\Factory', function ($app) {
            return new Engine($app);
        });
    }


}