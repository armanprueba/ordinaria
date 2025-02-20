<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\SocioController;
use App\Http\Controllers\LoginController;

Route::get('/', [LoginController::class, 'loginForm'])->name('login');
Route::post('/', [LoginController::class, 'login']);
Route::resource('libros', LibroController::class);
Route::resource('socios', SocioController::class);

