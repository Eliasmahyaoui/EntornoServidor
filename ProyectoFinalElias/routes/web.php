<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventsController; //Esto hay que ponerlo porque si no no te coge las rutas de tipo recurso ni de sola una accion
use App\Http\Controllers\PlayersController;

//RUTAS DE SOLA UNA ACCION

//RuTAS DE VARIOS RECURSOS
Route::resource('events',EventsController::class);
Route::resource('players', PlayersController::class);


//RUTAS NORMALES
Route::get('/', function () {
    return view('index');
})->name('index');


Route::get('contact', function(){

    return view('contacto');
})->name('contacto');


Route::get('dondeEstamos', function(){

    return view('dondeEstamos');
})->name('dondeEstamos');






