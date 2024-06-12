<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PokemonCreateRequest;
use App\Http\Requests\PokemonUpdateRequest;
use App\Models\Pokemon;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pokemon=Pokemon::with(['type1', 'type2'])->get();
        return view('pokemon.index', [
            'pokemon' => $pokemon,
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pokemon.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PokemonCreateRequest $request)
    {
        $validated = $request->validated();
    
        $pokemon = new Pokemon();
        $pokemon->name = $validated['name'];
        $pokemon->description = $validated['description'];
        $pokemon->hp = $validated['hp'];
        $pokemon->att = $validated['att'];
        $pokemon->def = $validated['def'];
        $pokemon->attspe = $validated['attspe'];
        $pokemon->defspe = $validated['defspe'];
        $pokemon->vit = $validated['vit'];
        $pokemon->size = $validated['size'];
        $pokemon->weight = $validated['weight'];
        $pokemon->type1_id = $validated['type1_id'];
        $pokemon->type2_id = $validated['type2_id'] ?? null; // Handle nullable type2_id
    
        // Si une image est fournie, la sauvegarder
        if ($request->hasFile('imgurl')) {
            $path = $request->file('imgurl')->store('pokemon', 'public');
            $pokemon->imgurl = $path;
        }
    
        $pokemon->save();
    
        return redirect()->route('pokemon.index');
    }
    


    /**
     * Display the specified resource.
     */
    public function show(Pokemon $pokemon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pokemon $pokemon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PokemonUpdateRequest $request, Pokemon $pokemon)
    {
        $validated = $request->validated();

        $pokemon->name = $validated['name'];
        $pokemon->imgurl = $validated['imgurl'];
        $pokemon->description = $validated['description'];
        $pokemon->hp = $validated['hp'];
        $pokemon->att = $validated['att'];
        $pokemon->def = $validated['def'];
        $pokemon->attspe = $validated['attspe'];
        $pokemon->defspe = $validated['defspe'];
        $pokemon->vit = $validated['vit'];
        $pokemon->size = $validated['size'];
        $pokemon->weight = $validated['weight'];
        $pokemon->type1_id = $validated['type1_id'];
        $pokemon->type2_id = $validated['type2_id'] ?? null; // Handle nullable type2_id
        $pokemon->save();

        return redirect()->back();
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pokemon $pokemon)
    {
        $pokemon->delete();

        return redirect()->back();
    }

}
