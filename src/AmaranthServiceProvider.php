<?php

namespace OllieFordandCo\Amaranth;

use Illuminate\Support\ServiceProvider;
use OllieFordandCo\Amaranth\Commands\InstallCommand;
use Illuminate\Support\Facades\Schema;

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

        Schema::defaultStringLength(191);

        /**
         * Register the resources from the package
         */
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');

        // Translations
        $this->loadTranslationsFrom(__DIR__ . '/../resources/lang', 'amaranth');

        // Views
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'amaranth');

        // Migrations
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');

        /**
         * Let the system publish the configuration to the main instance for modification
         */
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

        $this->app['router']->aliasMiddleware('install', 'OllieFordandCo\Amaranth\Http\Middleware\InstallationAccess');

        /*
         * Register the service provider for the dependencies.
         */
        $this->app->register('Jackiedo\DotenvEditor\DotenvEditorServiceProvider');

        /*
         * Create aliases for the dependencies.
         */
        $loader = \Illuminate\Foundation\AliasLoader::getInstance();
        $loader->alias('DotenvEditor', 'Jackiedo\DotenvEditor\Facades\DotenvEditor');

        $this->mergeConfigFrom(
            __DIR__ . '/../config/amaranth.php', 'amaranth'
        );

        $this->mergeConfigFrom(
            __DIR__ . '/../config/dotenv-editor.php', 'dontenv-editor'
        );

    }


}