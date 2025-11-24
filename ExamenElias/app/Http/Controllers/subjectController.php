<?php

namespace App\Http\Controllers;

use App\Http\Requests\subjectRequest;
use Illuminate\Http\Request;
use Illuminate\View\View;



//aqui creamos el controlador de tipo recurso para el CRUD de todo
class subjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('subjects.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('subjects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(subjectRequest $request): View
    {

        $subject['name'] = $request->input('name');
        $subject['codigo'] = $request->input('codigo');
        $subject['ciclo'] = $request->input('ciclo');
        $subject['curso'] = $request->input('curso');
        return view('subjects.store', compact('subject'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View

    {
        return view('subjects.show', compact('id'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    /*public function edit(string $id)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    /*public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    /*public function destroy(string $id)
    {
        //
    }*/
}
