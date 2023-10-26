<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

#Clientes
Route::get('/listar-clientes', [App\Http\Controllers\ClienteController::class, 'index']);
Route::post('/insertar-clientes', [App\Http\Controllers\ClienteController::class, 'store']);


#Proyectos Inmobiliarios
Route::get('/listar-proyectos', [App\Http\Controllers\ProyectoInmobiliarioController::class, 'index']);
Route::get('/buscar-proyectos', [App\Http\Controllers\ProyectoInmobiliarioController::class, 'search']);
Route::post('/insertar-proyectos', [App\Http\Controllers\ProyectoInmobiliarioController::class, 'store']);

#Unidad Propiedad
Route::get('/listar-unidades', [App\Http\Controllers\UnidadController::class, 'index']);
Route::post('/insertar-unidad', [App\Http\Controllers\UnidadController::class, 'store']);

