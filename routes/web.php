<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/tickets', 'TicketController@index')->name('tickets.index');
