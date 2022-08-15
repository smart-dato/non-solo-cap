<?php

namespace SmartDato\NonSoloCap\Providers;

use Illuminate\Support\ServiceProvider;
use SmartDato\NonSoloCap\Services\NonSoloCap;

class NonSoloCapServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('non-solo-cap', function ($app) {
            return new NonSoloCap();
        });
    }

    /**
     * Register anything in the service container.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
