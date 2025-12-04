<?php

namespace App\Http\Controllers;

use App\Models\Futbolista;
use Illuminate\Http\Request;

class FutbolistaController extends Controller
{
    public function index()
    {
        $futbolistas = Futbolista::all();
        return view('futbolistas.index', compact('futbolistas'));
    }

    public function create()
    {
        return view('futbolistas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'posicion' => 'required',
            'edad' => 'required|integer',
            'equipo' => 'required',
            'nacionalidad' => 'required'
        ]);

        Futbolista::create($request->all());

        return redirect()->route('futbolistas.index')
                         ->with('success', 'Futbolista creado correctamente');
    }

    public function show($id)
    {
        $futbolista = Futbolista::findOrFail($id);
        return view('futbolistas.show', compact('futbolista'));
    }

    public function edit($id)
    {
        $futbolista = Futbolista::findOrFail($id);
        return view('futbolistas.edit', compact('futbolista'));
    }

    public function update(Request $request, $id)
    {
        $futbolista = Futbolista::findOrFail($id);

        $request->validate([
            'nombre' => 'required',
            'posicion' => 'required',
            'edad' => 'required|integer',
            'equipo' => 'required',
            'nacionalidad' => 'required'
        ]);

        $futbolista->update($request->all());

        return redirect()->route('futbolistas.index')
                         ->with('success', 'Futbolista actualizado correctamente');
    }

    public function destroy($id)
    {
        $futbolista = Futbolista::findOrFail($id);
        $futbolista->delete();

        return redirect()->route('futbolistas.index')
                         ->with('success', 'Futbolista eliminado correctamente');
    }
}
