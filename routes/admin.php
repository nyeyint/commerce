<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "admin prefix" & "web" middleware group. Now create something great!
|
*/

Route::get('/orders/{id}/details', 'OrderController@details');

Route::group(['prefix' => 'ajax-request', 'middleware' => ['ajax']], function() {

	Route::post('/payment-gateway/disabled/{id}', 'AjaxAdminController@disablePaymentGateway')->name('payment.disablePaymentGateway');
	Route::post('/payment-gateway/enabled/{id}', 'AjaxAdminController@enablePaymentGateway')->name('payment.enablePaymentGateway');

});

