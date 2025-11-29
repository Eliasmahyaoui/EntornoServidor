<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use App\Models\Character;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CharacterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $characters=Character::orderBy('name','ASC')->get();

        return view('characters.index', compact('characters'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('characters.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $character= new Character();
        $character ->name= $request->input('name');
        $character ->age= $request->input('age');
        $character ->gender= $request->input('gender');
        $character ->role= $request->input('role');
        $character ->description= $request->input('description');
        $character->save();

        return redirect()->route('characters.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Character $character)
    {
        return view('characters.show', compact('character'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Character $character):View
    {
        return view('characters.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Character $character)
    {
        $character->name= $request->input('name');
        $character->age= $request->input('age');
        $character->save();

        return redirect()->route('characters.show', $character);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Character $character):View
    {
        return view('characters.destroy');
    }
}
