<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CalculadoraController;

Route::get('/', [CalculadoraController::class, 'index']);


Route::get('calculadora', [CalculadoraController::class, 'index']);
Route::post('calculadora', [CalculadoraController::class, 'index']);

Route::get('calculadora/soma', [CalculadoraController::class, 'soma']);
Route::post('calculadora/soma', [CalculadoraController::class, 'soma']);


Route::get('calculadora/subtracao', [CalculadoraController::class, 'subtracao']);
Route::post('calculadora/subtracao', [CalculadoraController::class, 'subtracao']);