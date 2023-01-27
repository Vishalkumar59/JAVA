<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Agents\PaymentsController;
use App\Http\Controllers\APIHomeController;
use App\Http\Controllers\API\APIPropertyController;
use App\Http\Controllers\API\APIAboutSection;
use App\Http\Controllers\API\APIAboutController;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('payment/status',[PaymentsController::class,'paymentCallback']);
Route::get('all-property',[APIHomeController::class,'allProperty']);
Route::get('city-search',[APIHomeController::class,'citysearch']);
Route::get('price-search',[APIHomeController::class,'pricesearch']);
Route::get('input-search',[APIHomeController::class,'inputsearch']);
Route::get('/properties',[APIHomeController::class,'properties']);

Route::get('/all-vehicles',[APIHomeController::class,'allVehicles']);
Route::get('vehicles-city-search',[APIHomeController::class,'vehiclescitysearch']);
Route::get('vehicles-property-search',[APIHomeController::class,'vehiclespropertysearch']);
Route::get('vehicles-price-search',[APIHomeController::class,'vehiclespricesearch']);
Route::get('vehicles-input-search',[APIHomeController::class,'vehiclesinputsearch']);

//Property add,edit,delete,update
Route::get('all-property',[APIPropertyController::class,'index']);
Route::post('add-property',[APIPropertyController::class,'store']);
Route::get('edit-property/{id}',[APIPropertyController::class,'edit']);
Route::put('update-property/{id}',[APIPropertyController::class,'update']);
Route::get('delete-property/{id}',[APIPropertyController::class,'delete']);


//About Section start
Route::get('all-aboutSection',[APIAboutSection::class,'index']);
Route::post('add-aboutSection',[APIAboutSection::class,'store']);
Route::get('edit-aboutSection/{id}',[APIAboutSection::class,'edit']);
Route::put('update-aboutSection/{id}',[APIAboutSection::class,'update']);
Route::get('delete-aboutSection/{id}',[APIAboutSection::class,'delete']);

//About
Route::get('all-about',[APIAboutController::class,'index']);
Route::post('add-about',[APIAboutController::class,'store']);
// Route::get('edit-aboutSection/{id}',[APIAboutSection::class,'edit']);
// Route::put('update-aboutSection/{id}',[APIAboutSection::class,'update']);
// Route::get('delete-aboutSection/{id}',[APIAboutSection::class,'delete']);