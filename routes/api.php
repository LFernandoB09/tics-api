<?php

use App\Http\Controllers\AtributosEgresoController;
use App\Http\Controllers\EgresadosController;
use App\Http\Controllers\JefeCarreraController;
use App\Http\Controllers\MateriasController;
use App\Http\Controllers\ObjetivosEducacionalesController;
use App\Http\Controllers\ProfesoresController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/profesores', [ProfesoresController::class, 'index']);
Route::get('/materias', [MateriasController::class, 'index']);
Route::get('/contacto', [JefeCarreraController::class, 'index']);
Route::get('/egresados', [EgresadosController::class, 'index']);
Route::get('/objetivosEducacionales', [ObjetivosEducacionalesController::class, 'index']);
Route::get('/atributosEgreso', [AtributosEgresoController::class, 'index']);
