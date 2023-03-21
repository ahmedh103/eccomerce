<?php

use App\Http\Controllers\Admin\AuthController;
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
    ], function(){

    Route::group(['prefix =>admin', 'as' => 'admin.'], function (){

    });
    Route::get('/admin/login', [AuthController::class, 'index'])->name('admin.login');
    Route::post('/admin/login', [AuthController::class, 'login'])->name('admin.login');

    Route::group(['prefix' => 'admin', 'as' => 'admin.' , 'middleware'=> ['AdminAuth' , 'isAdmin' , 'prevent-back-history'] ], function (){
        Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
        Route::get('/', [HomeController::class, 'index'])->name('home');
    });
});

