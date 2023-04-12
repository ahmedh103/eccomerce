<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

class AppServiceProvider extends ServiceProvider
{
	/**
	 * Register any application services.
	 */
	public function register():void {}

	/**
	 * Bootstrap any application services.
	 */
	public function boot():void
    {
        Collection::macro('toUpper', function () {
            return $this->map(function (string $value) {
                return Str::upper($value);
            });
        });

        Paginator::useBootstrapFive();
    }
}
