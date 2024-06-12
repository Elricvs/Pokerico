<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class PokedexController extends Controller
{
    public function index(){
        $pokemon=Pokemon::with(['type1', 'type2'])->get();
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
