<?php

namespace Dd\LandRegistry;

use Dd\LandRegistry\LandRegistry;
use Illuminate\Support\ServiceProvider as IlluminateServiceProvider;;

class ServiceProvider extends IlluminateServiceProvider
{
    public function boot()
    {
        $configPath = __DIR__ . '/../config/landregistry.php';
        $this->publishes([$configPath => config_path('landregistry.php')], 'config');
    }
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/landregistry.php', 'landregistry');   

        $this->app->bind('landregistry.wrapper', function ($app) {
            return new LandRegistry( $app['config']);
        });
    }
    public function provides(): array
    {
        return ['landregistry.wrapper'];
    }
}
