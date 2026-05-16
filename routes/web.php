<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('computador', 
    'App\Http\Controllers\ComputadorController@index');