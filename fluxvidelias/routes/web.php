<?php

use App\Http\Controllers\ActorController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LegalsController;
use Illuminate\Support\Facades\Route;


Route::get('/', IndexController::class)->name('inicio');
Route::resource('actors',ActorController::class)->except(['destroy', 'store', 'update']);

//Ruta de varias acciones
Route::get('faq', [LegalsController::class,'faq'])->name('faq');
Route::get('cookies', [LegalsController::class,'cookies'])->name('cookies');


Route::get('movies', function () {
    $peliculas = [
        [
            "titulo" => "Star Wars: Episodio V - El Imperio Contraataca",
            "director" => "Irvin Kershner",
            "anio" => 1980
        ],
        [
            "titulo" => "Blade Runner",
            "director" => "Ridley Scott",
            "anio" => 1982
        ],
        [
            "titulo" => "Regreso al Futuro",
            "director" => "Robert Zemeckis",
            "anio" => 1985
        ],
        [
            "titulo" => "Los Cazafantasmas",
            "director" => "Ivan Reitman",
            "anio" => 1984
        ],
        [
            "titulo" => "Tron",
            "director" => "Steven Lisberger",
            "anio" => 1982
        ],
        [
            "titulo" => "Terminator",
            "director" => "James Cameron",
            "anio" => 1984
        ],
        [
            "titulo" => "Los Goonies",
            "director" => "Richard Donner",
            "anio" => 1985
        ],
        [
            "titulo" => "Aliens: El regreso",
            "director" => "James Cameron",
            "anio" => 1986
        ],
        [
            "titulo" => "Depredador",
            "director" => "John McTiernan",
            "anio" => 1987
        ],
        [
            "titulo" => "Beetlejuice",
            "director" => "Tim Burton",
            "anio" => 1988
        ]
    ];

    return view('movies.index', compact('peliculas'));
})->name('listfilms');

Route::get('movies/{id}', function (int $id) {
    return view('movies.show', compact('id'));
})->whereNumber('id')
    ->name('peliculasid');
