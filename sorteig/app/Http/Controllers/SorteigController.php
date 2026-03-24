<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use App\Models\Premi;
use Illuminate\Http\Request;

class SorteigController extends Controller
{
    public function index()
    {
        // 2.1 Recuperar els premis emmagatzemats en la taula
        $premis = Premi::all();

        // Recuperar totes les persones
        $persones = Persona::all();

        // 2.2 Assignar aleatòriament un premi a cada persona
        $resultat = $persones->map(function ($persona) use ($premis) {
            $persona->premi = $premis->random();
            return $persona;
        });

        return view('sorteig', ['persones' => $resultat]);
    }

    // Punt 4: Mostrar tots els premis
    public function premis()
    {
        $premis = Premi::all();
        return view('premis', ['premis' => $premis]);
    }
}
