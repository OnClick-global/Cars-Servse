<?php

use App\Http\Controllers\Admin\CarsController;
use App\Http\Controllers\Admin\PartnerController;
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

    Route::group(['namespace' => 'admin', 'prefix' => 'cars'], function () {
        Route::get('/allCars', [CarsController::class, 'index'])->name('allCars');
        Route::get('/addNewCar', [CarsController::class, 'create'])->name('add new car');
        Route::post('/store', [CarsController::class, 'store'])->name('store car');
        Route::get('/EditCar/{id}', [CarsController::class, 'edit'])->name('edit car');
        Route::post('/updateCar/{id}', [CarsController::class, 'updateCar'])->name('update car');
        Route::post('/carsimages', [CarsController::class, 'carsImages'])->name('cars.images');
        Route::post('/carStatus', [CarsController::class, 'changeStatus'])->name('car status');
        Route::get('/deletecar/{id}', [CarsController::class, 'destroy'])->name('car delete');
        Route::get('/viewCar/{id}', [CarsController::class, 'view'])->name('car view');
    });
    Route::group(['namespace' => 'admin'], function () {
        Route::get('/settings', [SettingController::class, 'settings'])->name('settings');
        Route::post('/settings/update', [SettingController::class, 'store'])->name('settings update');
    });
    Route::group(['namespace' => 'admin', 'prefix' => 'partner'], function () {
        Route::get('/allPartner', [PartnerController::class, 'index'])->name('all partner');
        Route::get('/addNewPartner', [PartnerController::class, 'create'])->name('add new partner');
        Route::post('/new partner', [PartnerController::class, 'store'])->name('store partner');
        Route::get('/EditCar/{id}', [PartnerController::class, 'edit'])->name('edit partner');
        Route::post('/updateCar/{id}', [PartnerController::class, 'updatePartner'])->name('update partner');
        Route::get('/deletecar/{id}', [PartnerController::class, 'destroy'])->name('partner delete');
    });
});











