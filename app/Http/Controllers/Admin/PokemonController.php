<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PokemonCreateRequest;
use App\Http\Requests\PokemonUpdateRequest;
use App\Models\Attack;
use App\Models\Pokemon;
use App\Models\Type;
use App\Models\User;
use Illuminate\Auth\Access\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
    
        $id = Auth::user()->id;
        $search = $request->query('search');
    
       
            $query = Pokemon::orderByDesc('updated_at');
    
        if ($search) {
            $query->where(function($query) use ($search) {
                $query->where('description', 'LIKE', '%'.$search.'%')
                      ->orWhere('name', 'LIKE', '%'.$search.'%')
                      ->orWhereHas('type1', function ($query) use ($search) {
                          $query->where('name', 'LIKE', '%'.$search.'%');
                      })
                      ->orWhereHas('type2', function ($query) use ($search) {
                          $query->where('name', 'LIKE', '%'.$search.'%');
                      });
            });
        }
    
        $pokemon = $query->paginate(10);
    
        $pokemon=Pokemon::with(['type1', 'type2', 'attacks'])->get();
        return view('admin.pokemon.index', [
            'pokemon' => $pokemon,
        ]);
    }
    


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types=Type::all();
        $attacks=Attack::all();
        return view('admin.pokemon.create', [
            'types' => $types,
            'attacks' => $attacks,
        ]);
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
        $pokemon->type2_id = $validated['type2_id'] ?? null;
    
        // Si une image est fournie, la sauvegarder
        if ($request->hasFile('imgurl')) 
        {
            $path = $request->file('imgurl')->store('images/pokemon', 'public');
            $path = '/storage/' . $path;
            $pokemon->imgurl = $path;
        }
    
        $pokemon->save();

        $pokemon->attacks()->sync([$validated['attack1_id']], false);

        if($validated['attack2_id'] != null)
        {
            $pokemon->attacks()->sync([$validated['attack2_id']], false);
        }

        if($validated['attack3_id'] != null)
        {
            $pokemon->attacks()->sync([$validated['attack3_id']], false);
        }

        if($validated['attack4_id'] != null)
        {
            $pokemon->attacks()->sync([$validated['attack4_id']], false);
        }

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
        $types = Type::all();
        $attacks= Attack::all();
        $poke = Pokemon::with(['type1', 'type2', 'attacks'])->find($pokemon->id);
        return view('admin.pokemon.edit',[
            'pokemon' => $poke,
            'types' => $types,
            'attacks' => $attacks,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PokemonUpdateRequest $request, Pokemon $pokemon)
    {
        $validated = $request->validated();

        $pokemon->name = $validated['name'];
        //$pokemon->imgurl = $validated['imgurl'];
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
        $pokemon->type2_id = $validated['type2_id'] ?? null;

        if ($request->hasFile('imgurl')) {
            $path = $request->file('imgurl')->store('pokemon', 'public');
            $pokemon->imgurl = $path;
        }

        $pokemon->save();

        $pokemon->attacks()->sync([$validated['attack1_id']], true);

        if($validated['attack2_id'] != null)
        {
            $pokemon->attacks()->sync([$validated['attack2_id']], false);
        }

        if($validated['attack3_id'] != null)
        {
            $pokemon->attacks()->sync([$validated['attack3_id']], false);
        }

        if($validated['attack4_id'] != null)
        {
            $pokemon->attacks()->sync([$validated['attack4_id']], false);
        }

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
