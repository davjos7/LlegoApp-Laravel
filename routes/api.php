<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventosController;
use App\Http\Controllers\UsuariosController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/user', function (Request $request) {
    return $request->user();
});

//registrar
Route::post('/eventos/registrar', [EventosController::class, 'registrar']);
Route::post('/eventos/detalle{id}', [EventosController::class, 'detalle']);


//para mostrar en pantalla
Route::get('/eventos/listar', [EventosController::class, 'listado']);

//para que actualize uno por uno
Route::put('/eventos/actualizar/{id}', [EventosController::class, 'actualizar']);

//eliminar
Route::get('/eventos/eliminar/{id}', [EventosController::class, 'eliminar']);


//USUARIOS CRUD

//registrar
Route::post('/usuarios/registrar', [UsuariosController::class, 'registrar']);

//para mostrar en pantalla
Route::get('/usuarios', [UsuariosController::class, 'listado']);

//para que actualize uno por uno
Route::put('/usuarios/actualizar/{id}', [UsuariosController::class, 'actualizar']);

//eliminar
Route::get('/usuarios/eliminar/{id}', [UsuariosController::class, 'eliminar']);

//login
Route::post('/usuarios/login', [UsuariosController::class, 'login']);




