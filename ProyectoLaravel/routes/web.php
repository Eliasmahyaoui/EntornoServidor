<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    //return view('welcome');
    return 'proyecto Laravel Elias <br><a href="'.route('saludo',['name'=>'Rick']). ' ">Rick</a>';
});


Route::get('datetime', function () {
    return date('d/m/y h:i:s');
});

Route::get('juegos/higuercard', function () {
    return 'aqui se mostrara las cartas de higuer';
});

Route::get('juegos/blackjack', function () {
    return 'aqui se mostrara las cartas de blackjack';
});

Route::get('juegos/donde-estamos', function () {
    return 'descrpicion del sitio ';
});

Route::get('greet/{name}', function (string $name) {
    return 'Hola' . $name;
})->name('saludo');


Route::redirect('date','datetime');

