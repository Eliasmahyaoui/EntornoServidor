<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventsController; //Esto hay que ponerlo porque si no no te coge las rutas de tipo recurso ni de sola una accion
use App\Http\Controllers\PlayersController;
use App\Http\Controllers\LegalController;

//RUTAS DE SOLA UNA ACCION



//RuTAS DE VARIOS RECURSOS
Route::resource('events',EventsController::class);
Route::resource('players', PlayersController::class);


//ESTAS RUTAS SE PONEN ASI CUANDO HACES UN CONTROLADOR NORMAL PERO TIENES QUE ESPECIFICARLOS
Route::get('legal/privacidad',[LegalController::class,'privacidad'])->name('legal.privacidad');
Route::get('legal/cookies', [LegalController::class,'cookies'])->name('legal.cookies');



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






