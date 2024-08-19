<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TypeCreateRequest;
use App\Http\Requests\TypeUpdateRequest;
use App\Models\Type;
use App\Models\User;
use Illuminate\Auth\Access\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $types=Type::all();
        return view('admin.type.index',[
            'types' => $types,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.type.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(TypeCreateRequest $request)
    {
        $validated = $request->validated();

        $type = new Type;
        $type->name = $validated['name'];

        // Si une image est fournie, la sauvegarder
        if ($request->hasFile('imgurl')) 
        {
            $path = $request->file('imgurl')->store('images/type', 'public');
            $path = '/storage/' . $path;
            $type->imgurl = $path;
        }

        $type->save();

        return redirect()->route('type.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Type $type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Type $type)
    {
        return view ('admin.type.edit', ['type'=>$type]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TypeUpdateRequest $request, Type $type)
    {
        $validated = $request->validated();
        $type->name = $validated['name'];

        if ($request->hasFile('imgurl')) {
            $path = $request->file('imgurl')->store('type', 'public');
            $type->imgurl = $path;
        }

        $type->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Type $type)
    {
        $type->delete();

        return redirect()->back();
    }
}
