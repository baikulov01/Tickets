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

Route::get('/', 'BusController@index')->name('buses.index');
Route::get('/buses/{bus}', 'BusController@show')->name('buses.show');
Route::post('/buses/{bus}', 'BusController@update')->name('buses.update');
Route::get('/delete/{bus}', 'BusController@delete')->name('buses.delete');
Route::get('/create', 'BusController@create');
Route::post('/create', 'BusController@store');

