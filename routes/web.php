<?php

use App\Http\Controllers\Admin\Client\GoogleSheetController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Auth::routes();

Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => 'admin'], function () {
    Route::group(['namespace' => 'Main'], function () {
        Route::get('/', 'IndexController')->name('admin.main.index')->middleware('auth');
       
    });

    Route::group(['namespace' => 'Client','prefix' => 'client'], function () {
        Route::get('/sheet','GoogleSheetController')->name('admin.client.sheet');
        Route::get('/', 'IndexController')->name('admin.client.index');
        Route::get('/create', 'CreateController')->name('admin.client.create');
        Route::post('/', 'StoreController')->name('admin.client.store');
        Route::get('/show/{client}', 'ShowController')->name('admin.client.show');
    });
});

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/show',[GoogleSheetController::class])->name('show');
