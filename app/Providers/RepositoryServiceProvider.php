<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register():void
    {
        /*-- admin --*/
        $this->app->bind(
            'App\Http\Interfaces\Admin\HomeInterface',
            'App\Http\Repositories\Admin\HomeRepository',
        );
        $this->app->bind(
            'App\Http\Interfaces\Admin\DepartmentInterface',
            'App\Http\Repositories\Admin\DepartmentRepository',
        );


        $this->app->bind(
            'App\Http\Interfaces\Admin\AuthInterface',
            'App\Http\Repositories\Admin\AuthRepository',
        );

        $this->app->bind(
            'App\Http\Interfaces\Admin\ArticleInterface',
            'App\Http\Repositories\Admin\ArticleRepository',
        );

        /*-- End admin --*/

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
    public function boot():void
    {
        //
    }
}
