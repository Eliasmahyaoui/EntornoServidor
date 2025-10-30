<?php

use Illuminate\Support\Facades\Route;

//RUTAS DE SOLA UNA ACCION



//RuTAS DE VARIOS RECURSOS



//RUTAS
Route::get('/', function () {
    return view('index');
})->name('index');


Route::get('Jugadores', function(){

    return view('jugadores');
})->name('jugadores');

