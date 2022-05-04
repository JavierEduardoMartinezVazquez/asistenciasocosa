<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmpleadoController;



//RUTA PRINCIPAL
Route::get('/', HomeController::class);


Route::controller(EmpleadoController::class)->group(function(){
    Route::get('empleados', 'index');
    Route::get('empleados/create', 'create');
    Route::get('empleados/{empleado}', 'show');
});

