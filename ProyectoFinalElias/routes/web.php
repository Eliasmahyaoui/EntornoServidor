<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PlayersController;
use App\Http\Controllers\LegalController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DondeEstamosController;
use App\Http\Controllers\StoreController;

//RUTAS DE SOLA UNA ACCION
route::get('/', IndexController::class)->name('Inicio');
route::get('contacto', ContactController::class)->name('contacto');
route::get('dondeEstamos', DondeEstamosController::class)->name('dondeEstamos');
route::get('tienda', StoreController::class)->name('tienda');


//RuTAS DE VARIOS RECURSOS
Route::resource('events', EventsController::class);
Route::resource('players', PlayersController::class);


//ESTAS RUTAS SE PONEN ASI CUANDO HACES UN CONTROLADOR NORMAL PERO TIENES QUE ESPECIFICARLOS
Route::get('legal/privacidad', [LegalController::class, 'privacidad'])->name('legal.privacidad');
Route::get('legal/cookies', [LegalController::class, 'cookies'])->name('legal.cookies');
