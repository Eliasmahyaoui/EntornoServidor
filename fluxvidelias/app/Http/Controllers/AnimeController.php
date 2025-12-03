<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use App\Models\Studio;
use Faker\Provider\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AnimeController extends Controller
{

    public function index()
    {

        $animes=Anime::orderBy('release_year','DESC')

                       ->orderBy('title', 'ASC')->simplepaginate(5);

        return view('animes.index', compact('animes'));

    }


    public function create()
    {
        $studio= Studio::get();
        return view('animes.create', compact('studio'));
    }


    public function store(Request $request)
    {
         return redirect()->route('animes.create');
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
        $anime->delete();
        return redirect()->route('animes.index');
    }


    /*public function addSlug()
    {
        $animes= Anime::get();

        foreach ($animes as $anime) {
            $anime->slug=Str::slug($anime->title);
            $anime->save();
        }
        return "todo hecho";
    }*/
}
