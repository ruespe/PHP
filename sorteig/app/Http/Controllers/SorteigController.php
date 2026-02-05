<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;

class SorteigController extends Controller
{
    public function index()
    {
        // 1. Recuperar el dni de totes les persones
        $persones = Persona::select('dni')->get();

        // 2. Assignar un número aleatori a cada persona
        $personesAlea = $persones->map(function ($persona) {
            $persona->nombre = rand(1, 100);
            return $persona;
        });
        // 3. Enviar les dades a la vista
        return view('sorteig', [
            'persones' => $personesAlea
        ]);
    }
}
