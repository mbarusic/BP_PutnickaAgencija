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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/documents', 'DocumentController@index')->name('documents');
Route::post('/documents', 'DocumentController@store')->name('documents.store');
Route::get('/countries', 'CountryController@index');
Route::get('/cities', 'CityController@index');
Route::get('/categories', 'CategoryController@index');
Route::get('/destinations', 'DestinationController@index');
Route::get('/transports', 'TransportController@index');
Route::get('/accommodations', 'AccommodationController@index');
Route::get('/travels', 'TravelController@index');
Route::get('/reservations', 'ReservationController@index');
Route::get('/accounts', 'AccountController@index');

Route::get('/countries/new', 'CountryController@create');
Route::post('/countries', 'CountryController@store');
Route::get('/cities/new', 'CityController@create');
Route::post('/cities', 'CityController@store');
Route::get('/categories/new', 'CategoryController@create');
Route::post('/categories', 'CategoryController@store');
Route::get('/destinations/new', 'DestinationController@create');
Route::post('/destinations', 'DestinationController@store');
Route::get('/transports/new', 'TransportController@create');
Route::post('/transports', 'TransportController@store');
Route::get('/accommodations/new', 'AccommodationController@create');
Route::post('/accommodations', 'AccommodationController@store');
Route::get('/travels/new', 'TravelController@create');
Route::post('/travels', 'TravelController@store');
Route::get('/reservations/new', 'ReservationController@create');
Route::post('/reservations', 'ReservationController@store');
Route::get('/accounts/new', 'AccountController@create');
Route::post('/accounts', 'AccountController@store');
