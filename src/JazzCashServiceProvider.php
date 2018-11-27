<?php

namespace Aureagle\JazzCash;

use Illuminate\Support\ServiceProvider;

class JazzCashServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // register our controller
        $this->app->make('Aureagle\JazzCash\JazzCashController');
    }
}
