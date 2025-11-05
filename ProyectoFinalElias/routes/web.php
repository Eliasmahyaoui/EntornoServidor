<?php

use Illuminate\Support\Facades\Route;

//RUTAS DE SOLA UNA ACCION



//RuTAS DE VARIOS RECURSOS



//RUTAS NORMALES
Route::get('/', function () {
    return view('index');
})->name('index');


Route::get('eventos', function(){

    return view('eventos');
})->name('eventos');


Route::get('jugadores', function(){

    return view('jugadores');
})->name('jugadores');


Route::get('contacto', function(){

    return view('contacto');
})->name('contacto');


Route::get('dondeEstamos', function(){

    return view('dondeEstamos');
})->name('dondeEstamos');






