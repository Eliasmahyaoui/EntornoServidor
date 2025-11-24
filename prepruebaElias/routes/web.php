<?php

use App\Http\Controllers\actorController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\legalController;
use Illuminate\Support\Facades\Route;


Route::get('movies', function () {
    return view('movies.index');
})->name('peliculas');

Route::get('movies/{id}', function ($id) {
    return view('movies.show');
})->whereNumber('id')
  ->name('movies');


  //RUTA DE SOLOUNA ACCION
  Route::get('/', indexController::class)->name('index');


  //RUTAS DE TIPO RECURSO

  Route::resource('actors', actorController::class)->except('destroy', 'update', 'store');

  //RUTA DE VARIAS ACCIONES
  Route::get('faq', [legalController::class, 'faq'])->name('faq');
  Route::get('cookies', [legalController::class,'cookies'])->name('cookies');



