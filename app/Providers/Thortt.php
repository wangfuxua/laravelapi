<?php

namespace App\Providers;

use Dingo\Api\Http\RateLimit\Throttle\Authenticated;
use Illuminate\Support\ServiceProvider;

class Thortt extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app['Dingo\Api\Http\RateLimit\Handler']->extend(function ($app){
            return new Authenticated();
        });
    }
}
