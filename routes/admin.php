<?php

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
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){ //...

    Route::group(['prefix' => 'admin', 'as' => 'admin.'], function (){
        Route::get('/', [HomeController::class, 'index'])->name('home');

        Route::group(['prefix'=>'product','as'=>'product.'],function (){
           Route::get('/',[\App\Http\Controllers\Admin\product\ProductController::class,"index"])->name('index');
           Route::get('create',[\App\Http\Controllers\Admin\product\ProductController::class,"create"])->name('create');
           Route::post('store',[\App\Http\Controllers\Admin\product\ProductController::class,"store"])->name('store');
        });
    });
});

