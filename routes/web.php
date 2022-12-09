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
    Route::get('/tickets/{ticket}', 'TicketController@delete')->name('tickets_delete');
 });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
