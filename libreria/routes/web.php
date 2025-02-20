<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\SocioController;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('libros', LibroController::class);
Route::resource('socios', SocioController::class);

