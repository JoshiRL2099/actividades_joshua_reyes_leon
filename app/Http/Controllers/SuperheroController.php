<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Superhero;
use App\Models\Universe;

class SuperheroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $superheroes = Superhero::with('universe')->get();

        return view('superheroes.index', compact('superheroes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $universes = Universe::all();

        return view('superheroes.create', compact('universes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'real_name' => 'required|string|max:100',
            'gender' => 'required|in:male,female',
            'universe_id' => 'required|exists:universes,id'
        ]);

        Superhero::create($request->only(['name', 'real_name', 'gender', 'universe_id']));

        return redirect()->route('superheroes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $superheroes = Superhero::with('universe')->find($id);
        return view('superheroes.show', compact('superheroes'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $superhero = Superhero::findOrFail($id);
        $universes = Universe::all();
        return view('superheroes.edit', compact('superhero', 'universes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'real_name' => 'required|string|max:100',
            'gender' => 'required|in:male,female',
            'universe_id' => 'required|exists:universes,id'
        ]);

        $superhero = Superhero::findOrFail($id);
        $superhero->update($request->only(['name', 'real_name', 'gender', 'universe_id']));

        return redirect()->route('superheroes.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $superhero = Superhero::findOrFail($id);
        $superhero->delete();

        return redirect()->route('superheroes.index');
    }
}