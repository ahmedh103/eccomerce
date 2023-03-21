<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
	/**
	 * Register any application services.
	 */
	public function register():void
	{
		$this->app->bind(
			'App\Http\Interfaces\Admin\ArticleInterface',
			'App\Http\Repositories\Admin\ArticleRepository'
		);
	}

	/**
	 * Bootstrap any application services.
	 */
	public function boot():void {}
}
