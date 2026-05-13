<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\TascaController;
use App\Http\Controllers\TreballadorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('tasques', TascaController::class);
Route::resource('categories', CategoriaController::class);
