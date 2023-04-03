<?php


use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\AdController;
use App\Http\Controllers\Admin\ProductController;
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
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'],
    ], function () {


    Route::group(['prefix' => 'admin', 'as' => 'admin.'], function (){
        Route::get('/login', [AuthController::class, 'index'])->name('login');
        Route::post('/login', [AuthController::class, 'login'])->name('login');
    });




    Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' =>  ['AdminAuth' , 'isAdmin' , 'prevent-back-history']], function () {

        Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

        Route::get('/', [HomeController::class, 'index'])->name('home');

        /*  Category Routes */
        Route::group([
            'controller' => CategoryController::class,
            'prefix'     => 'categories', 'as' => 'category.',

        ], function () {
            Route::get('index', 'index')->name('index');
            Route::get('create', 'create')->name('create');
            Route::post('store', 'store')->name('store');
            Route::get('edit/{category}', 'edit')->name('edit');
            Route::put('update/{category}', 'update')->name('update');
            Route::delete('delete/{category}', 'delete')->name('delete');

        });

        /*  Department Routes */
        Route::group(['controller' => DepartmentController::class,
            'prefix' => 'departments', 'as' => 'department.',
        ], function () {
            Route::get('index', 'index')->name('index');
            Route::get('create', 'create')->name('create');
            Route::post('store', 'store')->name('store');
            Route::get('update/{department}', 'updateForm')->name('updateForm');
            Route::put('update/{department}', 'update')->name('update');
            Route::delete('delete/{department}', 'delete')->name('delete');
            Route::get('departmentsSheet', 'exportDepartments')->name('export');
            Route::get('upload', 'uploadPage')->name('upload-page');
            Route::post('upload', 'upload')->name('importData');
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

        Route::group([
            'controller' => AdController::class,
            'prefix' => 'ads',
            'as' => 'ads.',
        ], function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::put('/approve/{ad}', 'approve')->name('approve');
            Route::put('/reject/{ad}', 'reject')->name('reject');
            Route::put('update/{ad}', 'update')->name('update');
            Route::delete('delete/{ad}', 'delete')->name('delete');
            Route::get('/edit/{ad}', 'edit')->name('edit');
        });


        Route::group(['prefix'=>'product','as'=>'product.'],function (){
            Route::get('/',[ProductController::class,"index"])->name('index');
            Route::get('create',[ProductController::class,"create"])->name('create');
            Route::post('store',[ProductController::class,"store"])->name('store');
            Route::get('editForm/{product}',[ProductController::class,"editForm"])->name('edit');
            Route::put('update/{product}',[ProductController::class,"update"])->name('update');
            Route::delete('/{product}',[ProductController::class,"delete"])->name('delete');
        });


    });

});



