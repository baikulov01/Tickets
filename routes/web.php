<?php

use App\Http\Controllers\PlaceController;
use App\Http\Controllers\TicketController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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



Route::group(['middleware' => 'role:administrator'], function() {
    Route::get('/busesPage', 'BusController@index')->name('buses.index');
    Route::get('/buses/{bus}', 'BusController@show')->name('buses.show');
    Route::post('/buses/{bus}', 'BusController@update')->name('buses.update');
    Route::get('/delete/{bus}', 'BusController@delete')->name('buses.delete');
    Route::get('/create', 'BusController@create');
    Route::post('/create', 'BusController@store');

    Route::get('/ticketsPage', 'TicketController@index')->name('tickets.index');
    Route::get('/tickets_create', 'TicketController@create');
    Route::post('/tickets_create', 'TicketController@store');
    Route::get('/tickets/{ticket}', 'TicketController@show')->name('tickets_show');
    Route::post('/tickets/{ticket}', 'TicketController@update')->name('tickets_update');
    Route::get('/tickets_delete/{ticket}', 'TicketController@delete')->name('tickets_delete');



    Route::get('/trips_create', 'TripController@create');
    Route::post('/trips_create', 'TripController@store');
    Route::get('/trips_delete/{trip}', 'TripController@delete')->name('trips_delete');
    Route::get('/trips/{trip}', 'TripController@show')->name('trips_show');
    Route::post('/trips/{trip}', 'TripController@update')->name('trips_update');


    Route::get('/places_create', 'PlaceController@create');
    Route::post('/places_create', 'PlaceController@store');
    Route::get('/places_delete/{place}', 'PlaceController@delete')->name('places_delete');
    Route::get('/places/{place}', 'PlaceController@show')->name('places_show');
    Route::post('/places/{place}', 'PlaceController@update')->name('places_update');
    Route::get('/search', 'PlaceController@search')->name('search_place');
 });

 Route::get('/tripsPage', 'TripController@index')->name('trips.index');
 Route::get('/search', 'BusController@search')->name('search');
 Route::post('/buy',[PlaceController::class,'buy'])->name('buy');
 Route::get('/placesPage', 'PlaceController@index')->name('places.index');
 //Route::post('/logout',function(){Auth::logout();redirect('/login');})->name('logout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
