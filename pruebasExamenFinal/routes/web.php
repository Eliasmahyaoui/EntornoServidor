<?php

use Illuminate\Support\Facades\Route;

//RUTAS SIMPLES
Route::get('gretting/{name}', function (string $name) {
    return 'Hola '. $name;
});


Route::get('gretting/{name}/{edad}', function (string $name, int $edad) {
    return 'Hola ' . $name . ' tienes ' . $edad . '  años?';
});

Route::get('gretting/{name}/id/{id}', function (string $name,string $id) {
    return 'Producto ' . $name . ' (id:' . $id .')';
});

//DEBERA CONTENER LETRAS SI NO ERROR
Route::get('gretting/{name}', function (string $name) {
    return '¿Como te llamas? ' . $name;

})->where('name', '[A-Za-z]+');

//DEBERA CONTENER NUMEROS 
Route::get('gretting/{id}',function (string $id){
    return 'El numero es  ' . $id;
})->where('id', '[0-9]+');
