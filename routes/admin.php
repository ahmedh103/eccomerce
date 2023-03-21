<?php

use App\Http\Controllers\Admin\DepartmentController;
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


    Route::group([
        'controller' => DepartmentController::class,
        'prefix'     => 'departments', 'as' => 'department.',
    ], function () {
        Route::get('index', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('update/{department}', 'updateForm')->name('updateForm');
        Route::put('update/{department}', 'update')->name('update');
        Route::delete('delete/{department}', 'delete')->name('delete');
    });
    });
});
