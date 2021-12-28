<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\NameController;
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
Route::get('/logout',[HomeController::class,'logout'])->name('signout');
Route::get('/',function (){ return redirect(route('home')); });

Route::group(['middleware'=>'auth:web'], function(){
    Route::get('/home',[HomeController::class,'index'])->name('home');
    // test
    Route::get('/name',[NameController::class,'index'])->name('name');
    Route::post('/delete',[NameController::class,'destroy'])->name('delete');
});











