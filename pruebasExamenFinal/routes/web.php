    <?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\indexController;
use App\Http\Controllers\legalController;
use App\Http\Controllers\actorController;

<<<<<<< HEAD
    //SOLO UNA ACCION
    Route::get('index', IndexController::class)->name('index');


    //DE TIPO RECURSO
    Route::resource('actors', actorController::class)->except('destroy');

    //DE VARIAS ACCIONES
    Route::get('faq',[legalController::class, 'faq'])->name('faq');
    Route::get('cookies',[legalController::class, 'cookies'])->name('cookies');













































/*RUTAS CON PARAMETROS
Route::get('gretting/{name}', function (string $name) {
    return view('persons.gretting', compact('name'));
})->where('name', '[A-Za-z]+');


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
})->where('id', '[0-9]+'); */
=======
//RUTAS SIMPLES


>>>>>>> f13a421c2d98b6ec9832c88d8d2102f71025fda1
