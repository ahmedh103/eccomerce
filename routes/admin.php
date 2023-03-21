<?php
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\AuthController;
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






Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login');


Route::group(
[
'prefix' => LaravelLocalization::setLocale(),
'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'],
], function () {

    Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'auth', 'isAdmin'], function () {
        Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

        Route::get('/', [HomeController::class, 'index'])->name('home');

        Route::group(['controller' => DepartmentController::class,
        'prefix' => 'departments', 'as' => 'department.',
        ], function () {
        Route::get('index', 'index')->name('index');
        Route::get('create', 'create')->name('create');
        Route::post('store', 'store')->name('store');
        Route::get('update/{department}', 'updateForm')->name('updateForm');
        Route::put('update/{department}', 'update')->name('update');
        Route::delete('delete/{department}', 'delete')->name('delete');
        });

    /* Article Routes */
        Route::group([
        'controller' => ArticleController::class,
        'prefix' => 'articles',
        'as' => 'article.',
        ], function () {
        Route::get('index', 'index')->name('index');
        Route::get('show/{article}', 'show')->name('show');
        Route::put('update/{article}', 'changeStates')->name('changeStates');

        });
    });
});