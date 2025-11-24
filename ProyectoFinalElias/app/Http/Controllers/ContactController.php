<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        return view('Contacts.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return view('Contacts.create');
    }


    public function store(Request $request):View
    {
        return view('Contacts.store');
    }


    public function show(string $id):View
    {
        return view('Contacts.show', compact('id'));
    }


    public function edit(string $id):View
    {
        return view('Contacts.edit');
    }


    public function update(Request $request, string $id):View
    {
        return view('Contacts.update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id):View
    {
        return view('Contacts.destroy');
    }
}
