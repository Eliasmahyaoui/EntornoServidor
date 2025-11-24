<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class actorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        return view('actors.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('actors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $actor['name']= $request->input('name');
        $actor['nacionality']= $request->input('nacionality');
         $actor['bornbirthday']= $request->input('bornbirthday');
        return view('actors.store', compact('actor'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id):View
    {
        return view('actors.show',compact('id'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id):View
    {
        return view('actors.edit', compact('id'));
    }

    /**
     * Update the specified resource in storage.
     */
    /*public function update(Request $request, string $id)
    {
        //
    }*/

    /**
     * Remove the specified resource from storage.
     */
    /*public function destroy(string $id)
    {
        //
    }*/
}
