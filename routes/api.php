<?php

use Illuminate\Http\Request;

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

Route::get('ongkir/get_provinces', function(){
	return Ongkir::getProvince();
});

Route::get('ongkir/get_province/{id}', function($id) {
	return Ongkir::getProvinceById($id);
});
Route::get('ongkir/get_cities/{id}', function($id) {
	return Ongkir::getCityByProvince($id);
});
Route::get('ongkir/get_city/{id}', function($id) {
	return Ongkir::getCityById($id);
});
Route::get('ongkir/get_subdistricts/{id}', function($id) {
	return Ongkir::getSubdistrict($id);
});
