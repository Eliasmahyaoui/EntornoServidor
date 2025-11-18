    <?php

use App\Http\Controllers\actorController;
use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\indexController;
use App\Http\Controllers\legalsController;

    //SOLO UNA ACCION
    Route::get('index', IndexController::class)->name('index');


    //DE TIPO RECURSO
    Route::resource('actors', actorController::class)->except('destroy', 'store', 'update');

    //DE VARIAS ACCIONES
    Route::get('faq',[legalsController::class, 'faq']);
    Route::get('cookies',[legalsController::class, 'cookies']);













































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
