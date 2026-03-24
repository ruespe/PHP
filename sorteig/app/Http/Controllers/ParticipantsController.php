<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona; 

class ParticipantsController extends Controller
{
    public function index()
    {
        $participantes = Persona::all(); 
        return view('participants', [
            'persones' => $participantes
        ]);
    }
}