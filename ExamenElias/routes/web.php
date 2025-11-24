<?php

use App\Http\Controllers\indexController;
use App\Http\Controllers\legalsController;
use App\Http\Controllers\subjectController;
use Illuminate\Support\Facades\Route;

//SOLO DE UNA ACCION

Route::get('/', indexController::class)->name('inicio');


//RUTA PARA LEGALS  CONTROLADOR DE VARIAS ACCIONES
Route::get('cookies', [legalsController::class, 'cookies'])->name('cookies');
Route::get('privacity', [legalsController::class,'privacity'])->name('privacity');

//RUTA DE VARIOS RECURSOS

Route::resource('subjects', subjectController::class)->except('destroy','update','edit');
