<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PruebaController;
use App\Http\Controllers\SocasaController;


//RUTA PRINCIPAL
Route::get('/', SocasaController::class);
Route::get('/login', LoginController::class);
Route::get('/home', HomeController::class);
Route::get('/prueba', PruebaController::class);

Route::controller(EmpleadoController::class)->group(function(){
    Route::get('empleados', 'index');
    Route::get('empleados/create', 'create');
    Route::get('empleados/{empleado}', 'show');
});

