<?php

use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Return_;

Route::get('/', function () {
    return view('welcome');
})->name('Inicio');


Route::get('ventas', function () {
    return 'Aqui veras un texto simple';
})->name('Ventas');


Route::get('ventas/{id}', function (int $id) {
    return view('idealista.show', compact('id'));

})->where(['id', '[0-9]+'])
  ->name('Ventas');




/*Aqui he creado una ruta de ventas que tendra un name y dentro de la ruta hay una vista
llamada idealista.show,que dentro de esa vista hay html que mostrara imagenes de casas por el nav*/
Route::get('casas/{name}', function( string $name){
     return view('idealista.casas', compact('name'));
})->where('name', '[A-Za-z]+')
  ->name('Casas en venta');






