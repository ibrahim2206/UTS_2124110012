<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\Penulis2Controller;

Route::get('/penulis2', [Penulis2Controller::class, 'index']);

