<?php

use App\Http\Controllers\EndUser\HomeController;
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
	], function () { //...
	Route::group(['prefix' => '/', 'as' => 'endUser.'], function () {
		Route::get('', [HomeController::class, 'index'])->name('home');
	});
});


