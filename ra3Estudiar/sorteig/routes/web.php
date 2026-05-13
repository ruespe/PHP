<?php

use App\Http\Controllers\ParticipantsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SorteigController;

Route::get('/', function () {
    return view('welcome');
});
 
// Les 7 rutes estàndard per al sorteig
Route::resource('sorteig', SorteigController::class);

// Ruta extra per al punt 4, se tiene que poner el método nuevo
Route::get('/premis', [SorteigController::class, 'llistarPremis']);

// Ruta nueva para participants
Route::resource('participants', ParticipantsController::class);