<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\exerciciosController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/exercicios', [ExerciciosController::class, 'exerTodos'])->name('exerTodos');
Route::post('/listaexerTodos', [ExerciciosController::class, 'listaexerTodos'])->name('listaexerTodos');