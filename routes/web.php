<?php

use Illuminate\Support\Facades\Route;



<<<<<<< Updated upstream
Route::get('/', function () {
    return view('welcome');
});

Route::get('/tickets', 'TicketController@index')->name('tickets.index');
=======

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
>>>>>>> Stashed changes
