<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\controllers\PropertyController;
use App\Http\controllers\PropertytypeController;
use App\Http\controllers\propertyunitsController;
use App\Http\controllers\TenantsController;
use App\Http\controllers\LandlordController;
use App\Http\Controllers\HomeController;



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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Auth::routes();



Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::get('upgrade', function () {return view('pages.upgrade');})->name('upgrade');
	 Route::get('map', function () {return view('pages.maps');})->name('map');
	 Route::get('icons', function () {return view('pages.icons');})->name('icons');
	 Route::get('table-list', function () {return view('pages.tables');})->name('table');
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
// saad


Route::get('tenants',[TenantsController::class,'create']);
Route::get('tenants/index',[TenantsController::class ,'index'])->name('tenants.index');
Route::post('tenant/store',[TenantsController::class,'store']);
Route::get('tenants/show/{id}',[TenantsController::class,'show']);
Route::get('tenants/edit/{id}',[TenantsController::class,'edit']);
Route::post('tenants/update/{id}',[TenantsController::class,'update']);
Route::get('tenants/delete/{id}', [TenantsController::class,'delete']);
Route::get('landlord',[LandlordController::class,'create']);
Route::post('landlord/store',[LandlordController::class,'store']);
Route::get('landlord/index',[LandlordController::class,'index'])->name('landlord.index');
Route::get('landlord/edit/{id}',[LandlordController::class,'edit']);
Route::post('landlord/update/{id}',[LandlordController::class,'update']);
Route::get('landlord/show/{id}',[LandlordController::class,'show']);
Route::get('landlord/delete/{id}',[LandlordController::class,'delete']);
Route::get('property',[PropertyController::class,'create'])->name('property.create');
Route::POST('property/store',[propertyController::class,'store'])->name('property.store');
Route::get('propertytype',[PropertytypeController::class,'type']);
Route::post('propertytype/store',[propertytypeController::class,'store']);
Route::get('propertyunits',[propertyunitsController::class,'create']);
Route::POST('propertyunits/store',[propertyunitsController::class,'store']);
Route::get('propertyunits/index',[propertyunitsController::class,'index'])->name('propertyunits.index');
Route::get('propertyunits/show/{id}',[propertyunitsController::class,'show']);
Route::get('propertyunits/delete/{id}',[propertyunitsController::class,'delete']);
Route::get('propertyunits/edit/{id}',[propertyunitsController::class,'edit']);
Route::post('propertyunits/update/{id}',[propertyunitsController::class,'update']);
Route::get('lease',[LeaseController::class,'create']);
});
