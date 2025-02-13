<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExerciciosController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/formulario', [ExerciciosController::class, 'abrirFormulario']);

Route::get('/formulario_resposta', [ExerciciosController::class, 'calcularFormulario']);