<?php

namespace App\Http\Controllers;

use App\Models\Treballador;
use Illuminate\Http\Request;

class TreballadorController extends Controller
{
    public function index()
    {
        $treballadors = Treballador::all();
        return view('treballadors.index', compact('treballadors'));
    }

    public function create()
    {
        return view('treballadors.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'dni'     => 'required|unique:treballadors,dni|max:9',
            'nom'     => 'required',
            'cognom1' => 'required',
            'cognom2' => 'nullable',
            'correu'  => 'required|email|unique:treballadors,correu',
            'telefon' => 'nullable',
        ]);

        Treballador::create($request->all());

        return redirect()->route('treballadors.index');
    }

    public function show(string $id)
    {
        $treballador = Treballador::findOrFail($id);
        return view('treballadors.show', compact('treballador'));
    }

    public function edit(string $id)
    {
        $treballador = Treballador::findOrFail($id);
        return view('treballadors.edit', compact('treballador'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'nom'     => 'required',
            'cognom1' => 'required',
            'cognom2' => 'nullable',
            'correu'  => 'required|email|unique:treballadors,correu,' . $id . ',dni',
            'telefon' => 'nullable',
        ]);

        $treballador = Treballador::findOrFail($id);
        $treballador->update($request->all());

        return redirect()->route('treballadors.index');
    }

    public function destroy(string $id)
    {
        $treballador = Treballador::findOrFail($id);
        $treballador->delete();
        return redirect()->route('treballadors.index');
    }
}
