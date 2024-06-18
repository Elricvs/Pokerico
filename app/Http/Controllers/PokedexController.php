<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use App\Models\Type;
use Illuminate\Http\Request;

class PokedexController extends Controller
{
    // Exemple de méthode pour afficher la liste des Pokémon avec filtrage
public function index(Request $request){
    $query = Pokemon::query();
    if ($request->has('search') && $request->search) {
        $query->where('name', 'LIKE', '%'.$request->search.'%');
    }
    if ($request->has('type') && $request->type) {
        $query->whereHas('type1', function($q) use ($request) {
            $q->where('id', $request->type);
        })->orWhereHas('type2', function($q) use ($request) {
            $q->where('id', $request->type);
        });
    }
    $pokemon = $query->with(['type1', 'type2'])->get();
    $types = Type::all();
    return view('pokemon.index', ['pokemon' => $pokemon, 'types' => $types]);
}


    public function show($id){
        $pokemon=Pokemon::find($id);
        return view('pokemon.show', [
            'pokemon' => $pokemon,
        ]);
    }
}
