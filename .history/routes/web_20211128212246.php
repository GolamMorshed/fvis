<?php

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

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::get('upgrade', function () {return view('pages.upgrade');})->name('upgrade'); 
	 Route::get('map', function () {return view('pages.maps');})->name('map');
	 Route::get('icons', function () {return view('pages.icons');})->name('icons'); 
	 Route::get('table-list', function () {return view('pages.tables');})->name('table');
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::get('upgrade', function () {return view('pages.upgrade');})->name('upgrade'); 
	 Route::get('map', function () {return view('pages.maps');})->name('map');
	 Route::get('icons', function () {return view('pages.icons');})->name('icons'); 
	 Route::get('table-list', function () {return view('pages.tables');})->name('table');
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::get('upgrade', function () {return view('pages.upgrade');})->name('upgrade'); 
	 Route::get('map', function () {return view('pages.maps');})->name('map');
	 Route::get('icons', function () {return view('pages.icons');})->name('icons'); 
	 Route::get('table-list', function () {return view('pages.tables');})->name('table');
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::get('upgrade', function () {return view('pages.upgrade');})->name('upgrade'); 
	 Route::get('map', function () {return view('pages.maps');})->name('map');
	 Route::get('icons', function () {return view('pages.icons');})->name('icons'); 
	 Route::get('table-list', function () {return view('pages.tables');})->name('table');
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

// New Routes - Menu Navigation(s)
Route::get('gallery-records', ['as' => 'gallery.view', 'uses' => 'App\Http\Controllers\GalleryController@index']);

Route::get('our-partners-records', ['as' => 'our_partners.view', 'uses' => 'App\Http\Controllers\OurPartnerController@index']);

Route::get('our-services-records', ['as' => 'our_services.view', 'uses' => 'App\Http\Controllers\OurServiceController@index']);

Route::get('our-projects-records', ['as' => 'our_projects.view', 'uses' => 'App\Http\Controllers\OurProjectController@index']);

Route::get('users-records', ['as' => 'manage_users.view', 'uses' => 'App\Http\Controllers\NewUserController@index']);

Route::get('cms-pages-records', ['as' => 'cms_pages.view', 'uses' => 'App\Http\Controllers\PageController@index_page']);

Route::get('investment-blocks-records', ['as' => 'investment_blocks.view', 'uses' => 'App\Http\Controllers\PageController@index_block']);

Route::get('benefit-cars-records', ['as' => 'benefit_cars.view', 'uses' => 'App\Http\Controllers\PageController@index_car']);

Route::get('testimonials-records', ['as' => 'testimonials.view', 'uses' => 'App\Http\Controllers\TestimonialController@index']);

Route::get('membership-plans-records', ['as' => 'membership_plans.view', 'uses' => 'App\Http\Controllers\MembershipController@index_plan']);
Route::get('membership-request-records', ['as' => 'membership_requests.view', 'uses' => 'App\Http\Controllers\MembershipController@index_request']);
Route::get('membership-user-records', ['as' => 'membership_users.view', 'uses' => 'App\Http\Controllers\MembershipController@index_user']);

Route::get('project-user-records', ['as' => 'project_users.view', 'uses' => 'App\Http\Controllers\ProjectController@index']);

Route::get('free-consultations-records', ['as' => 'project_users.view', 'uses' => 'App\Http\Controllers\ProjectController@index']);
