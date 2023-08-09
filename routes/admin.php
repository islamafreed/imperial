<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => 'admin'], function () {

	

Route::get('/', [
		'as' => 'admin.login',
		'uses' => 'Adminauth\LoginController@showLoginForm'
	]);

Route::post('/', [
		'as' => 'admin.login.post',
		'uses' => 'Adminauth\LoginController@login'
	]);
	
Route::middleware(['admin'])->group(function () {

	Route::get('/home', function () {
	    return redirect('/dashboard');
	});
});

Route::post('/password/email', 'Adminauth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
Route::post('/password/reset', 'Adminauth\ResetPasswordController@reset')->name('password.email');
Route::get('/password/reset', 'Adminauth\ForgotPasswordController@showLinkRequestForm');
Route::get('/password/reset/{token}', 'Adminauth\ResetPasswordController@showResetForm');

Route::get('/logout', '\App\Http\Controllers\Adminauth\LoginController@logout')->name('admin.logout');

Route::group(['middleware' => 'admin'], function () {


Route::get('/dashboard', [
	'as' => 'admin.dashboard',
    'uses' => 'Admin\DashboardController@index'
]);

Route::group(['prefix' => 'change-password'], function () {
    Route::get('/', [
          'as' => 'admin.change-password',
          'uses' => 'Admin\ChangePasswordController@index'
    ]);

    Route::post('/credentials', [
          'as' => 'admin.change-password.post',
          'uses' => 'Admin\ChangePasswordController@store'
    ]);
});

Route::group(['prefix' => 'gallery-category'], function () {
	Route::get('/', [
		'as' => 'admin.gallery-category',
		'uses' => 'Admin\GalleryCategoryController@index'
	]);

	Route::get('/create', [
		'as' => 'admin.add-gallery-category',
		'uses' => 'Admin\GalleryCategoryController@create'
	]);

	Route::post('/create', [
		'as' => 'admin.add-gallery-category.post',
		'uses' => 'Admin\GalleryCategoryController@store'
	]);

	Route::get('/show/{id}', [
		'as' => 'admin.show-gallery-category',
		'uses' => 'Admin\GalleryCategoryController@show'
	]);

	Route::get('/edit/{id}', [
		'as' => 'admin.edit-gallery-category',
		'uses' => 'Admin\GalleryCategoryController@edit'
	]);

	Route::patch('/update/{id}', [
		'as' => 'admin.update-gallery-category',
		'uses' => 'Admin\GalleryCategoryController@update'
	]);

	Route::get('/delete/{id}', [
		'as' => 'admin.delete-gallery-category',
		'uses' => 'Admin\GalleryCategoryController@destroy'
	]);
});

Route::group(['prefix' => 'gallery'], function () {
	Route::get('/', [
		'as' => 'admin.gallery-img',
		'uses' => 'Admin\GalleryController@index'
	]);

	Route::get('/create', [
		'as' => 'admin.add-gallery-img',
		'uses' => 'Admin\GalleryController@create'
	]);

	Route::post('/create', [
		'as' => 'admin.add-gallery-img.post',
		'uses' => 'Admin\GalleryController@store'
	]);

	Route::get('/show/{id}', [
		'as' => 'admin.show-gallery-img',
		'uses' => 'Admin\GalleryController@show'
	]);

	Route::get('/edit/{id}', [
		'as' => 'admin.edit-gallery-img',
		'uses' => 'Admin\GalleryController@edit'
	]);

	Route::patch('/update/{id}', [
		'as' => 'admin.update-gallery-img',
		'uses' => 'Admin\GalleryController@update'
	]);

	Route::get('/delete/{id}', [
		'as' => 'admin.delete-gallery-img',
		'uses' => 'Admin\GalleryController@destroy'
	]);

	Route::post('/add-gimage', [
		'as' => 'admin.gallery.image.ajax',
		'uses' => 'Admin\GalleryController@ajaxGalleryImageUpload'
	]);

	Route::post('/delete-gimage-image', [
		'as' => 'admin.gallery.image.delete.ajax',
		'uses' => 'Admin\GalleryController@ajaxGalleryImageDelete'
	]);

	Route::get('/delete-image/{id}/{gallery_img_id}', [
		'as' => 'admin.delete-image',
		'uses' => 'Admin\GalleryController@deleteImage'
	]);
});

Route::group(['prefix' => 'blog'], function () {
	Route::get('/', [
		'as' => 'admin.blog',
		'uses' => 'Admin\BlogController@index'
	]);

	Route::get('/create', [
		'as' => 'admin.add-blog',
		'uses' => 'Admin\BlogController@create'
	]);

	Route::post('/create', [
		'as' => 'admin.add-blog.post',
		'uses' => 'Admin\BlogController@store'
	]);

	Route::get('/show/{id}', [
		'as' => 'admin.show-blog',
		'uses' => 'Admin\BlogController@show'
	]);

	Route::get('/edit/{id}', [
		'as' => 'admin.edit-blog',
		'uses' => 'Admin\BlogController@edit'
	]);

	Route::patch('/update/{id}', [
		'as' => 'admin.update-blog',
		'uses' => 'Admin\BlogController@update'
	]);

	Route::get('/delete/{id}', [
		'as' => 'admin.delete-blog',
		'uses' => 'Admin\BlogController@destroy'
	]);
});

Route::group(['prefix' => 'package'], function () {
	Route::get('/', [
		'as' => 'admin.package',
		'uses' => 'Admin\PackageController@index'
	]);

	Route::get('/create', [
		'as' => 'admin.add-package',
		'uses' => 'Admin\PackageController@create'
	]);

	Route::post('/create', [
		'as' => 'admin.add-package.post',
		'uses' => 'Admin\PackageController@store'
	]);

	Route::get('/show/{id}', [
		'as' => 'admin.show-package',
		'uses' => 'Admin\PackageController@show'
	]);

	Route::get('/edit/{id}', [
		'as' => 'admin.edit-package',
		'uses' => 'Admin\PackageController@edit'
	]);

	Route::patch('/update/{id}', [
		'as' => 'admin.update-package',
		'uses' => 'Admin\PackageController@update'
	]);

	Route::get('/delete/{id}', [
		'as' => 'admin.delete-package',
		'uses' => 'Admin\PackageController@destroy'
	]);
});

Route::group(['prefix' => 'facility'], function () {
	Route::get('/', [
		'as' => 'admin.facility-img',
		'uses' => 'Admin\FacilityController@index'
	]);

	Route::get('/create', [
		'as' => 'admin.add-facility-img',
		'uses' => 'Admin\FacilityController@create'
	]);

	Route::post('/create', [
		'as' => 'admin.add-facility-img.post',
		'uses' => 'Admin\FacilityController@store'
	]);

	Route::get('/show/{id}', [
		'as' => 'admin.show-facility-img',
		'uses' => 'Admin\FacilityController@show'
	]);

	Route::get('/edit/{id}', [
		'as' => 'admin.edit-facility-img',
		'uses' => 'Admin\FacilityController@edit'
	]);

	Route::patch('/update/{id}', [
		'as' => 'admin.update-facility-img',
		'uses' => 'Admin\FacilityController@update'
	]);

	Route::get('/delete/{id}', [
		'as' => 'admin.delete-facility-img',
		'uses' => 'Admin\FacilityController@destroy'
	]);

	Route::post('/add-gimage', [
		'as' => 'admin.facility.image.ajax',
		'uses' => 'Admin\FacilityController@ajaxFacilityImageUpload'
	]);

	Route::post('/delete-gimage-image', [
		'as' => 'admin.facility.image.delete.ajax',
		'uses' => 'Admin\FacilityController@ajaxFacilityImageDelete'
	]);

	Route::get('/delete-image/{id}/{facility_img_id}', [
		'as' => 'admin.delete-facility-image',
		'uses' => 'Admin\FacilityController@deleteImage'
	]);
});

Route::group(['prefix' => 'service'], function () {
	Route::get('/', [
		'as' => 'admin.service',
		'uses' => 'Admin\ServiceController@index'
	]);

	Route::get('/create', [
		'as' => 'admin.add-service',
		'uses' => 'Admin\ServiceController@create'
	]);

	Route::post('/create', [
		'as' => 'admin.add-service.post',
		'uses' => 'Admin\ServiceController@store'
	]);

	Route::get('/show/{id}', [
		'as' => 'admin.show-service',
		'uses' => 'Admin\ServiceController@show'
	]);

	Route::get('/edit/{id}', [
		'as' => 'admin.edit-service',
		'uses' => 'Admin\ServiceController@edit'
	]);

	Route::patch('/update/{id}', [
		'as' => 'admin.update-service',
		'uses' => 'Admin\ServiceController@update'
	]);

	Route::get('/delete/{id}', [
		'as' => 'admin.delete-service',
		'uses' => 'Admin\ServiceController@destroy'
	]);
});

Route::group(['prefix' => 'check-date-availability'], function () {
	Route::get('/', [
		'as' => 'admin.check-date-availability',
		'uses' => 'Admin\CheckDateController@index'
	]);	

	Route::get('/show/{id}', [
		'as' => 'admin.show-check-date-availability',
		'uses' => 'Admin\CheckDateController@show'
	]);
});

Route::group(['prefix' => 'booked-date'], function () {
	Route::get('/', [
		'as' => 'admin.booked-date',
		'uses' => 'Admin\CheckDateController@bookedDateIndex'
	]);

	Route::get('/create', [
		'as' => 'admin.add-booked-date',
		'uses' => 'Admin\CheckDateController@create'
	]);

	Route::post('/create', [
		'as' => 'admin.add-booked-date.post',
		'uses' => 'Admin\CheckDateController@store'
	]);

	Route::get('/show/{id}', [
		'as' => 'admin.show-booked-date',
		'uses' => 'Admin\CheckDateController@bookedDateShow'
	]);
});

Route::group(['prefix' => 'get-quote'], function () {
	Route::get('/', [
		'as' => 'admin.get-quote',
		'uses' => 'Admin\GetQuoteController@index'
	]);	

	Route::get('/show/{id}', [
		'as' => 'admin.show-get-quote',
		'uses' => 'Admin\GetQuoteController@show'
	]);
});

Route::group(['prefix' => 'booking'], function () {
	Route::get('/', [
		'as' => 'admin.booking',
		'uses' => 'Admin\BookingController@index'
	]);	

	Route::get('/show/{id}', [
		'as' => 'admin.show-booking',
		'uses' => 'Admin\BookingController@show'
	]);
});

Route::group(['prefix' => 'contact-us'], function () {
	Route::get('/', [
		'as' => 'admin.contact-us',
		'uses' => 'Admin\ContactUsController@index'
	]);	
});

Route::group(['prefix' => 'lead'], function () {
	Route::get('/', [
		'as' => 'admin.lead',
		'uses' => 'Admin\LeadController@index'
	]);	
});











}); //end of middleware admin

}); //end of prefix admin
