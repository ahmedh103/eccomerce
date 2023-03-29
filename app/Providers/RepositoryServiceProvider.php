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

            'App\Http\Interfaces\Admin\CategoryInterface',
            'App\Http\Repositories\Admin\CategoryRepository',
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

        $this->app->bind(
            'App\Http\Interfaces\Admin\AdInterface',
            'App\Http\Repositories\Admin\AdRepository',

        /*-- End admin --*/


        );
        $this->app->bind(
            'App\Http\Interfaces\Admin\AuthInterface',
            'App\Http\Repositories\Admin\AuthRepository',
        );
        $this->app->bind(
            'App\Http\Interfaces\Admin\CategoryInterface',
            'App\Http\Repositories\Admin\CategoryRepository',
        );

        $this->app->bind(
            'App\Http\Interfaces\Admin\ProductInterface',
            'App\Http\Repositories\Admin\ProductRepository',
        );


        /*-- EndUser --*/
        $this->app->bind(
            'App\Http\Interfaces\EndUser\HomeInterface',
            'App\Http\Repositories\EndUser\HomeRepository',
        );
        $this->app->bind(
            'App\Http\Interfaces\EndUser\AuthInterface',
            'App\Http\Repositories\EndUser\AuthRepository',
        );

        $this->app->bind(
            'App\Http\Interfaces\EndUser\RegisterInterface',
            'App\Http\Repositories\EndUser\RegisterRepository',
        );

        $this->app->bind(
            'App\Http\Interfaces\EndUser\AdsInterface',
            'App\Http\Repositories\EndUser\AdsRepository',
        );

        $this->app->bind(
            'App\Http\Interfaces\EndUser\ProfileInterface',
            'App\Http\Repositories\EndUser\ProfileRepository',
        );
        $this->app->bind(
            'App\Http\Interfaces\EndUser\ProfileSettingInterface',
            'App\Http\Repositories\EndUser\ProfileSettingRepository',
        );

        $this->app->bind(
            'App\Http\Interfaces\EndUser\BlogInterface',
            'App\Http\Repositories\EndUser\BlogRepository',
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
