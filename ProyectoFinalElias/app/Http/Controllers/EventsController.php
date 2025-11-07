<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\view;
class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():view
    {
        return view('events.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():view
    {
        return view('events.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):view
    {
        return view('events.store');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id):view
    {
        return view('events.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id):view
    {
        return view('events.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id):view
    {
        return view('events.update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id):view
    {
        return view('events.destroy');
    }
}
