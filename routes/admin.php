<?php

use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(
	[
		'prefix'     => LaravelLocalization::setLocale(),
		'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'],
	], function () {
	Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
		Route::get('/', [HomeController::class, 'index'])->name('home');
		// routes of articles in admin
		Route::group([
			'controller' => ArticleController::class,
			'prefix'     => 'article',
			'as'         => 'article.',
		], function () {
			Route::get('/index', 'index')->name('index');
			Route::get('/show/{article}', 'show')->name('show');
			Route::put('/update/{article}', 'changeStates')->name('changeStates');
		});
	});
});

