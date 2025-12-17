<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehiculoController;

// Si entran a la página principal, redirigir al listado de vehículos
Route::get('/', function () {
    return redirect()->route('vehiculos.index');
});

// Esta sola línea crea TODAS las rutas necesarias (index, store, update, destroy...)
Route::resource('vehiculos', VehiculoController::class);
