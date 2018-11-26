<?php

namespace OllieFordandCo\Amaranth;

use Illuminate\Support\ServiceProvider;
use OllieFordandCo\Amaranth\Commands\InstallCommand;

class AmaranthServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {

        /**
         * Register the commands for the package
         */
        $this->commands([
            InstallCommand::class
        ]);

        /**
         * Register the resources from the package
         */
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');

        // Translations
        $this->loadTranslationsFrom(__DIR__ . '/../resources/lang', 'amaranth');

        // Views
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'amaranth');

        /**
         * Let the system publish the configuration to the main instance for modification
         */
        if ($this->app->runningInConsole()) {

            // Migrations
            $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');

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

        $this->app['router']->aliasMiddleware('install', 'OllieFordandCo\Amaranth\Http\Middleware\InstallationAccess');

        $this->mergeConfigFrom(
            __DIR__ . '/../config/amaranth.php', 'amaranth'
        );

        $this->mergeConfigFrom(
            __DIR__ . '/../config/dotenv-editor.php', 'dontenv-editor'
        );

        $this->app->singleton('OllieFordandCo\Amaranth\Contracts\Factory', function ($app) {
            return new Engine($app);
        });
    }


}