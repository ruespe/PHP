<?php

use App\Http\Controllers\CategoriaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TascaController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('tasques', TascaController::class);
Route::resource('categories', CategoriaController::class);