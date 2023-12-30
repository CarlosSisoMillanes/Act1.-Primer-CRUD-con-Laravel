<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PokemonsModel;

class PokemonsController extends Controller
{
    public function index()
    {
        $pokemons = PokemonsModel::all();
        return view('pokemons.index', compact('pokemons'));
    }

    public function create()
    {
        return view('pokemons.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'tipo' => 'required',
            'tamaño' => 'required',
            'peso' => 'required|numeric',
        ]);
        PokemonsModel::create($request->all());

        return redirect()->route('pokemons.index')->with('success', 'Pokémon creado exitosamente');
    }

    public function show($id)
    {
        $pokemon = PokemonsModel::findOrFail($id);
        return view('pokemons.show', compact('pokemon'));
    }

    public function edit($id)
    {
        $pokemon = PokemonsModel::findOrFail($id);
        return view('pokemons.edit', compact('pokemon'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required',
            'tipo' => 'required',
            'tamaño' => 'required',
            'peso' => 'required|numeric',
        ]);
        $pokemon = PokemonsModel::findOrFail($id);
        $pokemon->update($request->all());

        return redirect()->route('pokemons.index')->with('success', 'Pokémon actualizado exitosamente');
    }

    public function destroy($id)
    {
        $pokemon = PokemonsModel::findOrFail($id);
        $pokemon->delete();

        return redirect()->route('pokemons.index')->with('success', 'Pokémon eliminado exitosamente');
    }
}