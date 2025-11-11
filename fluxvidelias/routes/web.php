<?php

use App\Http\Controllers\ActorController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LegalsController;
use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

//Ruta  de una accion
Route::get('/', IndexController::class)->name('inicio');

//Ruta de varios recursos
Route::resource('actors',ActorController::class);

//Ruta de varias acciones
Route::get('faq', [LegalsController::class,'faq'])->name('faq');
Route::get('cookies', [LegalsController::class,'cookies'])->name('cookies');



//Ruta de tipo recurso
Route::resource('movies',MovieController::class);

