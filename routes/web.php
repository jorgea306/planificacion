<?php

use App\Http\Controllers\DesarrolloTerritoriaController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('components.pagina.contenido');
})->name('principal');


Route::get('/panel', function () {
    return view('components.panel.principal');
});


Route::get('/desarrollo', [DesarrolloTerritoriaController::class, 'leer'])->name('desarrollo');

Route::get('/desarrollo_panel', [DesarrolloTerritoriaController::class, 'leerWeb'])->name('desarrollo_panel');

Route::get('/formulario_desarrollo', [DesarrolloTerritoriaController::class, 'acceder'])->name('desarrollo_alta');

Route::post('/altaDesarrollo', [DesarrolloTerritoriaController::class, 'alta'])->name('altaDesarrollo');

Route::delete('/bajaDesarrollo/{id}', [DesarrolloTerritoriaController::class, 'baja'])->name('bajaDesarrollo');
