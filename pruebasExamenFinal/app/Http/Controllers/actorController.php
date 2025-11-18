<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

//use Illuminate\View\View;

class actorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('actors.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('actors.create')    ;
    }

    /**
     * Store a newly created resource in storage.
     */
   public function store(Request $request):View
    {

        $actor['name'] = $request->input('name');
        $actor['nacionalidad']= $request->input('nacionalidad');
        $actor['bornbirthday']= $request->input('bornbirthday');
        return view('actors.store',compact('actor'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $actor)
    {
        return view('actors.show',compact('id'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $actor)
    {
        return view('actors.edit',compact('id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    /*public function destroy(string $id)
    {
        //
    }*/
}
