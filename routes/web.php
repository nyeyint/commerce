<?php

Route::get('ol', function() {
    // return new App\Mail\DynamicEmail('blabla', 'blablabla', [
    //     'a' => '/pat/to/images.jpg'
    // ]);
    // return view('pdf.invoices');
});

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

// Payment Gateway Routes
/*
|--------------------------------------------------------------------------
| Rules
|--------------------------------------------------------------------------
|
| This routes is protected by State middleware.
| Every request through this routes always need an _encrypted_state
|  & _plain_state query string or any Request instance.
| To ensure all request is requested through this app.
|
*/
Route::group(['prefix' => 'pg', 'middleware' => 'state'], function() {


});

// Payment Gateway Response Route
Route::any('/{status}/payment/channel/{channel}', 'PGController@responsePayment')->middleware('pg-response');
Route::any('/{status}/payment/notify/{channel}', 'PGController@notifyPayment')->middleware('pg-response');
Route::any('/{status}/payment/review/{channel}', 'PGController@reviewPayment')->middleware('pg-response');
Route::any('/{status}/payment/failed/{channel}', 'PGController@failedPayment')->middleware('pg-response');


Auth::routes();
// Ecommerce Authentication Routes
Route::get('login', 'Auth\LoginController@showLoginForm')->name('ecommerce.login');
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', function(){
	Auth::logout();
	return redirect('/');
})->name('ecommerce.logout');
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('ecommerce.register');
Route::post('register', 'Auth\RegisterController@register');
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('ecommerce.password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('ecommerce.password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('ecommerce.password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');


// Functionality Routes
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/invoices', 'EcommerceController@getInvoices')->name('invoices.get');


// Social Media Authentication Routes

Route::group(['prefix' => '/oauth/authorize/', 'middleware' => ['noLogin']], function() {
	Route::get('/{provider}', 'Auth\SocialMediaAuthController@redirectToProvider');
	Route::get('/callback/{provider}', 'Auth\SocialMediaAuthController@handleProviderCallback');
});


// Admin Routes

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


// Ecommerce Routes
Route::group(['middleware' => ['web']], function() {

	// Search Routes
	Route::any('search', 'EcommerceController@search')->name('ecommerce.search');
	Route::post('search/api', 'EcommerceController@searchApi')->name('ecommerce.search_api');

	// Filter Routes
	Route::post('filter/api', 'EcommerceController@filterApi')->name('ecommerce.filter_api');

	// Ajax Requests
	Route::group(['prefix' => 'ajax-requests', 'middleware' => ['ajax']], function() {
		Route::post('/products', 'AjaxEcommerceController@ajaxProducts');
		Route::post('/products/sale', 'AjaxEcommerceController@ajaxProductSale');
		Route::post('/products/category/{id}', 'AjaxEcommerceController@productCategory');
		Route::post('/sliders', 'AjaxEcommerceController@ajaxSliders');
		Route::post('/brands', 'AjaxEcommerceController@ajaxBrands');
		Route::post('/blogs', 'AjaxEcommerceController@ajaxBlog');

		// carts
		Route::post('/cart/add', 'AjaxEcommerceController@addToCart');
		Route::post('/cart/get', 'AjaxEcommerceController@getCart');

		// Courier
		Route::post('/courier/get', 'AjaxEcommerceController@getCourier')->name('courier.all');
		Route::post('/courier/getActive', 'AjaxEcommerceController@getActiveCourier')->name('courier.active');
		Route::post('/courier/getInactive', 'AjaxEcommerceController@getInactiveCourier')->name('courier.inactive');
		Route::post('/courier/enable/{id}', 'AjaxEcommerceController@enableCourier')->name('courier.enable');
		Route::post('/courier/disable/{id}', 'AjaxEcommerceController@disableCourier')->name('courier.disable');

		// Courier
		Route::post('/ongkir/calculate', 'OngkirController@calculate')->name('ongkir.calculate');
	});

	// Blog Routes
	Route::get('/blog', 'EcommerceController@homePage');
	Route::get('/blog/{slug}', 'BlogController@view');

	// ShouldAuthenticated Routes
	Route::group(['middleware' => ['auth']], function() {

		Route::get('/verify/{token}', 'Auth\RegisterController@verify');
	});

	Route::group(['prefix' => 'me'], function() {

		// Customer Routes
		Route::get('/', 'CustomerController@index')->name('customer.dashboard');
		Route::get('/account', 'CustomerController@account')->name('customer.account');
		Route::put('/account', 'CustomerController@updateAccount')->name('customer.updateAccount');
		Route::get('/address', 'CustomerController@address')->name('customer.address');
		Route::post('/address/add', 'CustomerController@addAddress')->name('customer.addAddress');
		Route::delete('/address/delete', 'CustomerController@deleteAddress')->name('customer.deleteAddress');
		Route::get('/address/default/{id}', 'CustomerController@defaultAddress')->name('customer.defaultAddress');
		Route::get('/order', 'CustomerController@orders')->name('customer.orders');
    Route::get('/order/details', 'CustomerController@orderDetails')->name('customer.order.details');

	});

	// Cart Routes
	Route::group(['prefix' => 'cart', 'middleware' => 'auth'], function() {
		Route::get('/add', 'CartController@add');
		Route::get('/delete', 'CartController@delete')->name('cart.delete');
		Route::get('/', function() {
			return redirect()->route('cart.showAddressForm');
		})->name('cart.index');
		Route::get('/address', 'CartController@showAddressForm')->name('cart.showAddressForm');
		Route::post('/address', 'CartController@postAddress')->name('cart.postAddress');
		Route::get('/courier', 'CartController@showCourierForm')->name('cart.showCourierForm');
		Route::post('/courier', 'CartController@postCourier')->name('cart.postCourier');
    Route::get('/coupon', 'CartController@showCouponForm')->name('cart.showCouponForm');
    Route::post('/coupon', 'CartController@postCoupon')->name('cart.showCoupon');
		Route::get('/payment', 'CartController@showPaymentForm')->name('cart.paymentForm');
		Route::post('/payment', 'CartController@postPayment')->name('cart.postPayment');
	});

	// Payment Routes
	Route::group(['prefix' => 'payment', 'middleware' => 'auth'], function() {
			Route::get('/proccess/{encrypted}', 'PGController@proccessPayment')->name('payment.proccess');
			Route::post('/prepare/{encrypted}', 'PGController@preparePayment')->name('payment.prepare');
			Route::get('/redirect/{encrypted}', 'PGController@redirectPayment')->name('payment.redirect');
			Route::get('/success/{encrypted}', 'PGController@successPage')->name('payment.view.success');
			Route::get('/proccessing/{encrypted}', 'PGController@proccessingPage')->name('payment.view.proccessing');
			Route::get('/failed/{encrypted}', 'PGController@failedPage')->name('payment.view.failed');
			Route::get('/instruction/{encrypted}', 'PGController@instructionPage')->name('payment.view.instruction');
	});

	// Subscribe Newsletter Routes.
	Route::group(['prefix' => 'subscribe'], function() {
		Route::post('/', 'SubscriberController@postSubscribe')->name('subscriber.postSubscribe');
		Route::get('/confirm', 'SubscriberController@confirmSubscribe');
	});

	// Ecommerce Routes
	Route::get('/', 'EcommerceController@homePage')->name('ecommerce.index');
	Route::get('/{slug}', 'EcommerceController@getSlug');

});
