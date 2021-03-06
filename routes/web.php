<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\CarsController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\TensoController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\front\HomeFrontController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Artisan;
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
Route::get('/logout', [LoginController::class, 'logout'])->name('signout')->middleware('auth:web');
Route::get('cache', function () {
    Artisan::call('config:cache');
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    return redirect()->back();
});
Route::group(['namespace' => 'front'], function () {
    Route::get('/', [HomeFrontController::class, 'home'])->name('front');
    Route::get('car/{id}', [HomeFrontController::class, 'car'])->name('carFrontView');
    Route::get('service/{id}', [HomeFrontController::class, 'service'])->name('serviceFrontView');
    Route::get('tenso/', [HomeFrontController::class, 'tenso'])->name('tensoView');
    Route::get('change_lang/{lang}', [HomeFrontController::class, 'change_lang'])->name('change_lang');
});
Route::group(['middleware' => 'auth:web'], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::group(['namespace' => 'Admin', 'prefix' => 'cars'], function () {
        Route::get('/allCars', [CarsController::class, 'index'])->name('allCars');
        Route::get('/addNewCar', [CarsController::class, 'create'])->name('add new car');
        Route::post('/store', [CarsController::class, 'store'])->name('store car');
        Route::get('/EditCar/{id}', [CarsController::class, 'edit'])->name('edit car');
        Route::post('/updateCar/{id}', [CarsController::class, 'updateCar'])->name('update car');
        Route::post('/carsimages', [CarsController::class, 'carsImages'])->name('cars.images');
        Route::post('/carStatus', [CarsController::class, 'changeStatus'])->name('car status');
        Route::get('/deletecar/{id}', [CarsController::class, 'destroy'])->name('car delete');
        Route::get('/viewCar/{id}', [CarsController::class, 'view'])->name('car view');
        Route::get('/deleteImage/car/{id}', [CarsController::class, 'imageDelete'])->name('image.delete.car');

    });



    Route::group(['namespace' => 'Admin', 'prefix' => 'tenso'], function () {
        Route::get('/allTenso', [TensoController::class, 'index'])->name('alltenso');
        Route::get('/addTensoOnclick123', [TensoController::class, 'create'])->name('add new tenso');
        Route::post('/storeTenso', [TensoController::class, 'store'])->name('store tenso');
        Route::get('/EditTenso/{id}', [TensoController::class, 'edit'])->name('edit tenso');
        Route::post('/updateTenso/{id}', [TensoController::class, 'updateCar'])->name('update tenso');
        Route::post('/images', [TensoController::class, 'carsImages'])->name('tenso.images');
        Route::get('/deleteTenso/{id}', [TensoController::class, 'destroy'])->name('tenso delete');
        Route::get('/deleteImage/{id}', [TensoController::class, 'imageDelete'])->name('image.delete');

    });
    Route::group(['namespace' => 'Admin', 'prefix' => 'isuzu'], function () {
        Route::get('/allisuzu', [TensoController::class, 'allisuzu'])->name('allisuzu');
    });




    Route::group(['namespace' => 'Admin'], function () {
        Route::get('/settings', [SettingController::class, 'settings'])->name('settings');
        Route::post('/settings/update', [SettingController::class, 'store'])->name('settings update');
    });
    Route::group(['namespace' => 'Admin'], function () {
        Route::get('/about', [AboutController::class, 'abouts'])->name('about');
        Route::post('/about/update', [AboutController::class, 'store'])->name('about update');
    });
    Route::group(['namespace' => 'Admin', 'prefix' => 'partners'], function () {
        Route::get('/allPartner', [PartnerController::class, 'index'])->name('all partner');
        Route::get('/addNewPartner', [PartnerController::class, 'create'])->name('add new partner');
        Route::post('/newPartner', [PartnerController::class, 'store'])->name('store partner');
        Route::get('/EditPartner/{id}', [PartnerController::class, 'edit'])->name('edit partner');
        Route::post('/updatePartner/{id}', [PartnerController::class, 'updatePartner'])->name('update partner');
        Route::get('/deletePartner/{id}', [PartnerController::class, 'destroy'])->name('partner delete');
    });
    Route::group(['namespace' => 'Admin', 'prefix' => 'clients'], function () {
        Route::get('/allClient', [ClientController::class, 'index'])->name('all client');
        Route::get('/addNewClient', [ClientController::class, 'create'])->name('add new client');
        Route::post('/newClient', [ClientController::class, 'store'])->name('store client');
        Route::get('/EditClient/{id}', [ClientController::class, 'edit'])->name('edit client');
        Route::post('/updateClient/{id}', [ClientController::class, 'update'])->name('update client');
        Route::get('/deleteClient/{id}', [ClientController::class, 'destroy'])->name('client delete');
    });
    Route::group(['namespace' => 'Admin', 'prefix' => 'services'], function () {
        Route::get('/all', [ServiceController::class, 'index'])->name('all_service');
        Route::get('/addNewService', [ServiceController::class, 'create'])->name('add new service');
        Route::post('/newService', [ServiceController::class, 'store'])->name('store service');
        Route::get('/EditService/{id}', [ServiceController::class, 'edit'])->name('edit service');
        Route::post('/updateService/{id}', [ServiceController::class, 'update'])->name('update service');
        Route::get('/viewService/{id}', [ServiceController::class, 'view'])->name('service view');
        Route::get('/deleteService/{id}', [ServiceController::class, 'destroy'])->name('service delete');
    });

    Route::group(['namespace' => 'Admin', 'prefix' => 'sliders'], function () {
        Route::get('/allSliders', [SliderController::class, 'index'])->name('all Sliders');
        Route::get('/addNewSliders', [SliderController::class, 'create'])->name('add new Slider');
        Route::post('/newSliders', [SliderController::class, 'store'])->name('store Slider');
        Route::get('/EditSliders/{id}', [SliderController::class, 'edit'])->name('edit Slider');
        Route::post('/updateSliders/{id}', [SliderController::class, 'update'])->name('update Slider');
        Route::get('/viewSliders/{id}', [SliderController::class, 'view'])->name('Slider view');
        Route::get('/deleteSliders/{id}', [SliderController::class, 'destroy'])->name('Slider delete');
    });

});











