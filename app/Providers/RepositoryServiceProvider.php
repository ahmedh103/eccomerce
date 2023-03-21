<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        /*-- Admin --*/
        $this->app->bind(
            'App\Http\Interfaces\Admin\HomeInterface',
            'App\Http\Repositories\Admin\HomeRepository',
        );

        $this->app->bind(
            'App\Http\Interfaces\Admin\AdInterface',
            'App\Http\Repositories\Admin\AdRepository',
        );

        /*-- EndUser --*/
        $this->app->bind(
            'App\Http\Interfaces\EndUser\HomeInterface',
            'App\Http\Repositories\EndUser\HomeRepository',
        );
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
