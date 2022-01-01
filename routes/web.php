<?php

use App\Http\Controllers\Admin\CarsController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
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
Route::get('/logout', [LoginController::class, 'logout'])->name('signout');
Route::get('/', function () {
    return redirect(route('home'));
});

Route::group(['middleware' => 'auth:web'], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::group(['namespace' => 'admin','prefix'=>'cars'], function () {
        Route::get('/allCars', [CarsController::class, 'index'])->name('allCars');
        Route::get('/addNewCar', [CarsController::class, 'create'])->name('add new car');
        Route::post('/store', [CarsController::class, 'store'])->name('store car');
        Route::post('/carsimages', [CarsController::class, 'carsImages'])->name('cars.images');
        Route::post('/carStatus', [CarsController::class, 'changeStatus'])->name('car status');
        Route::get('/deletecar/{id}', [CarsController::class, 'destroy'])->name('car delete');
        Route::get('/viewCar/{id}', [CarsController::class, 'view'])->name('car view');
    });
    Route::group(['namespace' => 'admin'], function () {
        Route::get('/settings', [SettingController::class, 'settings'])->name('settings');
        Route::post('/settings/update', [SettingController::class, 'store'])->name('settings update');
    });
});











