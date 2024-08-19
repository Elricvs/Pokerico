<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AttackCreateRequest;
use App\Http\Requests\AttackUpdateRequest;
use App\Models\Attack;
use App\Models\Type;
use Illuminate\Http\Request;

class AttackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $attacks = Attack::with(['type'])->paginate(20);

        return view('admin.attack.index', ['attacks' => $attacks]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = Type::all();
        return view('admin.attack.create', ['types' => $types]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AttackCreateRequest $request)
    {
        $validated = $request->validated();
    
        $attack = new Attack();
        $attack->name = $validated['name'];
        $attack->description = $validated['description'];
        $attack->precision = $validated['precision'];
        $attack->puissance = $validated['puissance'];
        $attack->PP = $validated['PP'];
        $attack->type_id = $validated['type_id'];
    
        $attack->save();

        return redirect()->route('attack.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Attack $attack)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Attack $attack)
    {
        $types = Type::all();

        return view('admin.attack.edit', ['types' => $types, 'attack' => $attack]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AttackUpdateRequest $request, Attack $attack)
    {
        $validated = $request->validated();

        $attack->name = $validated['name'];
        $attack->description = $validated['description'];
        $attack->precision = $validated['precision'];
        $attack->puissance = $validated['puissance'];
        $attack->PP = $validated['PP'];
        $attack->type_id = $validated['type_id'];
    
        $attack->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Attack $attack)
    {
        $attack->delete();

        return redirect()->back();
    }
}
