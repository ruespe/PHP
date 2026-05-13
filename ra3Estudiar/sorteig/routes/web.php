<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SorteigController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('sorteig', SorteigController::class); // Genera les 7 rutes estàndard del CRUD (index, create, store, show, edit, update, destroy) vinculades al controlador.