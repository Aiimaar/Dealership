<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome.index');
})->name('welcome.index');

use App\Http\Controllers\CarController;

Route::resource('cars', CarController::class);