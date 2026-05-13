<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;
use App\Models\Premi; // Importem nou model

class SorteigController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $persones = Persona::all();
        $premis = Premi::all();
        $persones->map(function ($persona) use ($premis) {

            $persona->premi_assignat = $premis->random()->nom;
            return $persona;
        });

        return view('sorteig', compact('persones'));
    }

    // Nou mètode per a la part 4
    public function llistarPremis()
    {
        // Recuperem tots els premis per mostrar-los en una llista simple
        $premis = Premi::all();

        // Retornem una vista nova (hauràs de crear el fitxer premis.blade.php)
        return view('premis', compact('premis'));
    }

        // 1. Obtenir totes les dades del model Persona des de la base de dades
        // Es guarda tot en una col·lecció (una mena d'array de Laravel) anomenada $persones
        // $persones = Persona::all();
        // 2. Utilitzem el mètode 'map' per recórrer la col·lecció i modificar-la
        // El 'map' passa per cada objecte (persona) individualment
        // $persones->map(function ($persona) {

        // Creem un atribut nou "al vol" anomenat 'aleatori' dins de l'objecte $persona
        // Aquest atribut no existeix a la base de dades, només en la memòria d'aquest script
        //     $persona->aleatori = rand(1, 100);

        // Retornem l'objecte modificat per mantenir-lo dins de la col·lecció
        //     return $persona;
        // });

        // 3. Carreguem la vista 'sorteig.blade.php' enviant les dades
        // El segon paràmetre ['persones' => $persones] crea la variable $persones a la vista
        //return view('sorteig', ['persones' => $persones]);


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
