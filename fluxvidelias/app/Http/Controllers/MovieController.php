<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
class MovieController extends Controller
{

    public function index()
    {
        $movies= Movie::where('visibility', 1)
                      ->orderby('title','ASC')
                       ->get();

        return view ('movies.index',compact('movies'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Movie $movie)
    {
        return view('movies.show', compact('movie'));
    }


    public function edit(string $id)
    {
        //
    }


    public function update(Request $request, string $id)
    {
        //
    }


    public function destroy(string $id)
    {
        //
    }
}
