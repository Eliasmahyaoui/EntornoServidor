<?php

namespace App\Http\Controllers;

use App\Http\Requests\ActorRequest;
use Illuminate\Http\Request;

use Illuminate\View\View;

class ActorController extends Controller
{
    public function index(): View
    {
        return view('actors.index');
    }


    public function create(): View
    {
        return view('actors.create');
    }

    public function show(string $id): View
    {
        return view('actors.show', compact('id'));
    }

    public function edit(string $id): View
    {
 return view('actors.edit');
    }



    public function store(ActorRequest $request)
    {
        $actor['name'] = $request->input('name');
        $actor['nacionalidad'] = $request->input('nacionalidad');
        $actor['bornbirthday'] = $request->input('bornbirthday');
        return view('actors.store', compact('actor'));

    }
    /*public function update(Request $request, string $id)
    {
        //
    }*/
    /*public function destroy(string $id)
    {
        //
    }*/
}
