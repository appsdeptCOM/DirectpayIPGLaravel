<?php

namespace AppsDept\LaravelDirectpayIpg;

use Illuminate\Support\ServiceProvider;

class DirectpayServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        $this->publishes([
            __DIR__ . '/../config/directpay.php' => config_path('directpay.php'),
        ]);

        $this->loadRoutesFrom(__DIR__.'/../routes/api.php');

    }

    public function register()
    {

    }
}
