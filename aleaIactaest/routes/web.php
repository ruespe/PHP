<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AleaiactaestController;
// Route::get('/', action: function () {
//     return view('welcome');
// });
Route::get('/', [AleaiactaestController::class, 'index']);
