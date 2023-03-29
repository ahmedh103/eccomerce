<?php

use App\Http\Controllers\EndUser\AdController;
use App\Http\Controllers\EndUser\AuthController;
use App\Http\Controllers\EndUser\HomeController;
use App\Http\Controllers\RegisterController;
use App\Models\User;
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

    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'register'])->name('register');

    Route::group(['prefix' => '/', 'as' => 'endUser.' , 'middleware'=> ['prevent-back-history'] ], function (){

        Route::middleware(['auth' , 'status' ])->group(function () {
            Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
        });
        Route::get('', [HomeController::class, 'index'])->name('home');
        Route::get('/allads', [AdController::class, 'index'])->name('ads.index');
    });

});


