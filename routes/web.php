<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\PublicacioneController;
use App\Http\Controllers\ConversacioneController;

Route::get('/', function () {
    return view('welcome');
});

// Rutas de productos
Route::resource('products', ProductController::class);

Route::resource('registros', RegistroController::class);


Route::resource('conversaciones', ConversacioneController::class); 

Route::resource('publicaciones', PublicacioneController::class); 

