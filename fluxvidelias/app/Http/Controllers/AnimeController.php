<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use Faker\Provider\Company;
use Illuminate\Http\Request;

class AnimeController extends Controller
{

    public function index()
    {

        $animes=Anime::orderBy('release_year','DESC')
                       ->orderBy('title', 'ASC')
                       ->get();
        return view('animes.index', compact('animes'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Anime $anime)
    {
        return view('animes.show', compact('anime'));
     
    }


    public function edit(Anime $anime)
    {
        //
    }


    public function update(Request $request, Anime $anime)
    {
        //
    }


    public function destroy(Anime $anime)
    {
        //
    }
}
