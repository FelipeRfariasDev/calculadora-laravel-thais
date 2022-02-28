<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CalculadoraController;

Route::get('calculadora', [CalculadoraController::class, 'index'])->name('calculadora.index.get');
Route::post('calculadora', [CalculadoraController::class, 'index'])->name('calculadora.index.post');

Route::get('calculadora/soma', [CalculadoraController::class, 'soma'])->name('calculadora.soma.get');
Route::post('calculadora/soma', [CalculadoraController::class, 'soma'])->name('calculadora.soma.post');
