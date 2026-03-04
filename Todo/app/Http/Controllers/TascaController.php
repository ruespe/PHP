<?php

namespace App\Http\Controllers;
use App\Models\Tasca;
use App\Models\Categoria;


use Illuminate\Http\Request;

class TascaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $tasques = Tasca::with('categoria')->get();
        return view('tasques.index', compact('tasques'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $categories = Categoria::all();
        return view('tasques.create', compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
        'titol' => 'required',
        'prioritat' => 'required',
        'status' => 'required',
        'categoria_id' => 'required|exists:categories,id'
    ]);

        Tasca::create($request->all());

        return redirect()->route('tasques.index');

    }

    /**
     * Display the specified resource.
        */
    public function show(string $id)
    {
        // Recuperem la tasca amb la seva categoria
        $tasca = Tasca::with('categoria')->findOrFail($id);

        // Retornem la vista passant-hi la tasca
        return view('tasques.show', compact('tasca'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $tasques = Tasca::findOrFail($id);
        $categories = Categoria::all();
        return view('tasques.edit', compact('tasques', 'categories'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
        'titol' => 'required',
        'prioritat' => 'required',
        'status' => 'required',
        'categoria_id' => 'required|exists:categories,id'
    ]);

    $tasques = Tasca::findOrFail($id);
    $tasques->update($request->all());

    return redirect()->route('tasques.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $tasques = Tasca::findOrFail($id);
        $tasques->delete();
        return redirect()->route('tasques.index');

    }
}
