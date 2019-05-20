<?php

namespace Yalsicor\LaravelGeoImporter;

use Illuminate\Support\ServiceProvider;

class LaravelGeoImporterServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'yalsicor');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'yalsicor');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/laravel-geoimporter.php', 'laravel-geoimporter');

        // Register the service the package provides.
        $this->app->singleton('laravel-geoimporter', function ($app) {
            return new LaravelGeoImporter;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['laravel-geoimporter'];
    }
    
    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole()
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/laravel-geoimporter.php' => config_path('laravel-geoimporter.php'),
        ], 'laravel-geoimporter.config');

        // Publishing the views.
        /*$this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/yalsicor'),
        ], 'laravel-geoimporter.views');*/

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/yalsicor'),
        ], 'laravel-geoimporter.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/yalsicor'),
        ], 'laravel-geoimporter.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
