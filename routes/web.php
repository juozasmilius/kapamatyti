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

Auth::routes();

//Location
Route::resource('/cities', 'Admin\Location\CitiesController');
Route::resource('/counties', 'Admin\Location\CountiesController');
Route::resource('/countries', 'Admin\Location\CountriesController');
Route::resource('/municipalities', 'Admin\Location\MunicipalitiesController');

//Park
Route::resource('/parkregiones', 'Admin\Park\ParkRegionesController');
Route::resource('/park', 'Admin\Park\ParksController');

//Place
Route::resource('/placeimages', 'Admin\Place\PlaceImagesController');
Route::resource('/places', 'Admin\Place\PlacesController');
Route::resource('/placetypes', 'Admin\Place\PlaceTypesController');

//Route
Route::resource('/routeplaces', 'Admin\Route\RoutePlacesController');
Route::resource('/routes', 'Admin\Route\RoutesController');


Route::get('/dashboard', 'DashboardController@index');
