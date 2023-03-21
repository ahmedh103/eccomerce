<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\AdController;
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
    });

    Route::group(['prefix' => 'admin', 'as' => 'admin.'], function (){
        Route::get('/ads', [AdController::class, 'index'])->name('ads.index');
        Route::get('/ads/create', [AdController::class, 'create'])->name('ads.create');
        Route::post('/ads/store', [AdController::class, 'store'])->name('ads.store');
        Route::delete('/ads/delete/{ad}', [AdController::class, 'delete'])->name('ads.delete');
        Route::get('/ads/edit/{ad}', [AdController::class, 'edit'])->name('ads.edit');
        Route::put('/ads/update/{ad}', [AdController::class, 'update'])->name('ads.update');
    });
});

