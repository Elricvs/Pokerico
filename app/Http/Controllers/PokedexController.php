<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class PokedexController extends Controller
{
    public function index(Request $request){
        $pokemon = Pokemon::where('name', 'LIKE', '%'.$request->query('search').'%')
        ->orWhere('name', 'LIKE', '%'.$request->query('search').'%')
        ->orWhereHas('type1', function ($query) use ($request) {
            $query->where('name', 'LIKE', '%'.$request->query('search').'%');
        })
        ->orWhereHas('type2', function ($query) use ($request) {
            $query->where('name', 'LIKE', '%'.$request->query('search').'%');
        })->with(['type1', 'type2'])->get();
        return view('pokemon.index', [
            'pokemon' => $pokemon,
        ]);
    }

    public function show($id){
        $pokemon=Pokemon::find($id);
        return view('pokemon.show', [
            'pokemon' => $pokemon,
        ]);
    }


}
