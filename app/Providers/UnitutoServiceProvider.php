<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Unituto;

class UnitutoServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
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
        // Register the service the package provides.
        $this->app->singleton('unituto', function($app) {
            $config = isset($app['config']['services']['unituto']) ? $app['config']['services']['unituto'] : null;

            if (is_null($config)) {
                $config = $app['config']['unituto'];
            }

            $client = new Unituto($config['api_key'],$config['email']);

            return $client;
           });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['unituto'];
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
            __DIR__.'/../config/unituto.php' => config_path('unituto.php'),
        ], 'unituto.config');
    }
}