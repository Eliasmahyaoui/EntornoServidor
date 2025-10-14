<?php

use Illuminate\Support\Facades\Route;

//Lo primeor
Route::get('/', function () {
    return 'hola soy Elias, bienvenido a fluxVidElias';
})->name('introduccion');

Route::get('movies', function () {
    return 'listado de peliculas de fluxvid';
})->name('Listado de peliculas');

Route::get('movies/{id}', function (int $id) {
    return 'Esta es la movie:' . $id;
})->whereNumber('id')
  ->name('peliculasid');
