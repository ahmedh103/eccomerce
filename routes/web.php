<?php

use App\Http\Controllers\EndUser\AdsController;
use App\Http\Controllers\EndUser\AuthController;
use App\Http\Controllers\EndUser\HomeController;
use App\Http\Controllers\EndUser\ProfileController;
use App\Http\Controllers\EndUser\ProfileSettingController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ShowDepartmentController;
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

        // profile
        Route::group([
            'controller' => ProfileController::class,
            'prefix' => 'profile',
            'as' => 'profile.',
        ], function () {
            Route::get('/', 'index')->name('index');
            Route::put('update', 'update')->name('update');
            Route::get('/edit', 'edit')->name('edit');
        });

        //profile setting
        Route::group([
            'controller' => ProfileSettingController::class,
            'prefix' => 'profile/setting',
            'as' => 'profile.setting.',
        ], function () {
            Route::get('/', 'index')->name('index');
            Route::put('/update', 'update')->name('update');
            Route::get('/edit', 'edit')->name('edit');
        });


        Route::get('', [HomeController::class, 'index'])->name('home');
        Route::get('/allads', [AdsController::class, 'index'])->name('ads.index');
        route::group(['prefix' =>'ads', 'as' =>'ads.','controller'=>AdsController::class ,'middleware'=>'auth'],function(){
            Route::get('create','create')->name('create');
            Route::post('store','store')->name('store');
        });

        Route::group(['prefix'=>'blog','as'=>'blog.','middleware'=>'auth'],function (){
            Route::get('/',[\App\Http\Controllers\EndUser\blogController::class,"index"])->name('index');
            Route::get('create',[\App\Http\Controllers\EndUser\blogController::class,"create"])->name('create');
            Route::post('store',[\App\Http\Controllers\EndUser\blogController::class,"store"])->name('store');
            Route::get('updateForm/{blog}',[\App\Http\Controllers\EndUser\blogController::class,"updateForm"])->name('edit');
            Route::put('edit/{blog}',[\App\Http\Controllers\EndUser\blogController::class,"update"])->name('update');
            Route::get('search',[\App\Http\Controllers\EndUser\blogController::class,"search"]);
        });
    });

});


