<?php

namespace Ifirlana\Poc;

use Illuminate\Support\ServiceProvider;

use Ifirlana\Poc\Console\{InstallPocPackage, MakeFooCommand};


class PocServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'poc');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'poc');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('poc.php'),
            ], 'config');

            $this->commands([
                InstallPocPackage::class,
                MakeFooCommand::class,
            ]);

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/poc'),
            ], 'views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/poc'),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/poc'),
            ], 'lang');*/

            // Registering package commands.
            // $this->commands([]);
            if (! class_exists('CreatePocTable')) {
                $this->publishes([
                  __DIR__ . '/../database/migrations/create_poc_table.php.stub' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_poc_table.php'),
                  // you can add any number of migrations here
                ], 'migrations');
              }
        }

        
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'poc');

        // Register the main class to use with the facade
        $this->app->singleton('poc', function () {
            return new Poc;
        });
        $this->app->bind('calculator', function($app) {
            return new Calculator();
        });
    }
}
