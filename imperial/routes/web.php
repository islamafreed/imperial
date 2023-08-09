<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/home', [
	'as' => 'home',
	'uses' => 'Web\HomeController@index'
]);

Route::get('/', function () {
    return redirect('/home');
});

Route::get('/about-us', [
	'as' => 'about-us',
	'uses' => 'Web\AboutUsController@index'
]);

Route::get('/facilities', [
	'as' => 'facilities',
	'uses' => 'Web\FacilityController@index'
]);

Route::group(['prefix' => '/packages'], function () {
	Route::get('/', [
		'as' => 'packages',
		'uses' => 'Web\PackageController@index'
	]);

	Route::get('/{slug}', [
		'as' => 'packages-details',
		'uses' => 'Web\PackageController@show'
	]);

	Route::post('/package-request', [
		'as' => 'packages.post',
		'uses' => 'Web\PackageController@store'
	]);
});

Route::group(['prefix' => '/booking'], function () {
	Route::get('/', [
		'as' => 'booking',
		'uses' => 'Web\BookingController@index'
	]);

	Route::post('/', [
		'as' => 'booking.post',
		'uses' => 'Web\BookingController@store'
	]);
});

Route::get('/gallery', [
	'as' => 'gallery',
	'uses' => 'Web\GalleryController@index'
]);

Route::group(['prefix' => '/contact-us'], function () {
	Route::get('/', [
		'as' => 'contact-us',
		'uses' => 'Web\ContactUsController@index'
	]);

	Route::post('/', [
		'as' => 'contact-us.post',
		'uses' => 'Web\ContactUsController@store'
	]);
});

Route::get('/service/{slug}', [
	'as' => 'service-details',
	'uses' => 'Web\ServiceController@show'
]);

Route::group(['prefix' => '/send-quote'], function () {
	Route::get('/', [
		'as' => 'send-quote',
		'uses' => 'Web\SendQuoteController@index'
	]);

	Route::post('/', [
		'as' => 'send-quote.post',
		'uses' => 'Web\SendQuoteController@store'
	]);
});

Route::post('/lead', [
	'as' => 'lead.post',
	'uses' => 'Web\LeadController@store'
]);
