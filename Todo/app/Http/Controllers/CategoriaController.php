<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Muestro un listado con todos los registros
     */
    public function index()
    {
        $categories = Categoria::with('tasques')->get();
        return view('categories.index', compact('categories'));
    }

    /**
     * Muestra formulario para crear un nuevo registro
     */
    public function create()
    {
        $categories = Categoria::all();
        return view('categories.create', compact('categories'));
    }

    /**
     * Guarda un nuevo registro
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
        ]);

        Categoria::create($request->all());

        return redirect()->route('categories.index');
    }

    /**
     * Muestro un registro en específico
     */
    public function show(string $id)
    {
        $categoria = Categoria::with('tasques')->findOrFail($id);

        return view('categories.show', compact('categoria'));
    }

    /**
     * Muestra formulario para editar
     */
    public function edit(string $id)
    {
        $categories = Categoria::findOrFail($id);
        return view('categories.edit', compact('categories'));
    }

    /**
     * Actualiza registro
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nom' => 'required',
        ]);

        $categories = Categoria::findOrFail($id);
        $categories->update($request->all());

        return redirect()->route('categories.index');
    }

    /**
     * Elimina registro
     */
    public function destroy(string $id)
    {
        $categories = Categoria::findOrFail(($id));
        $categories->delete();
        return redirect()->route('categories.index');
    }
}
