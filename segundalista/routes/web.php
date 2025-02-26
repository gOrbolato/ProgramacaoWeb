<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\exerciciosController;

Route::get('/', function () {
    return view('welcome');
});

// exer1
Route::get('/exer1', [exerciciosController::class, 'lista.exer1']);
Route::post('/listaexer1', [exerciciosController::class, 'resultado', 'soma']);

// exer2
Route::get('/exer2', [exerciciosController::class, 'lista.exer2']);
Route::post('/listaexer2', [exerciciosController::class, 'primeiro', 'segundo']);

// exer3
Route::get('/exer3', [exerciciosController::class, 'lista.exer3']);
Route::post('/listaexer3', [exerciciosController::class, 'valorProduto']);

//exer4
Route::get('/exer4', [exerciciosController::class, 'lista.exer4']);
Route::post('/listaexer4', [exerciciosController::class, 'valorMaximo', 'primos']);

//exer5
Route::get('/exer5', [exerciciosController::class, 'lista.exer5']);
Route::post('/listaexer5', [exerciciosController::class, 'numeroMes', 'nomeMes']);

//exer6
Route::get('/exer6', [exerciciosController::class, 'lista.exer6']);
Route::post('/listaexer6', [exerciciosController::class, 'numero']);

//exer7
Route::get('/exer7', [exerciciosController::class, 'lista.exer7']);
Route::post('/listaexer7', [exerciciosController::class, 'numero', 'soma']);

//exer8
Route::get('/exer8', [exerciciosController::class, 'lista.exer8']);
Route::post('/listaexer8', [exerciciosController::class, 'numero', 'contador']);

//exer9
Route::get('/exer9', [exerciciosController::class, 'lista.exer9']);
Route::post('/listaexer9', [exerciciosController::class, 'numero', 'fatorial']);

//exer10
Route::get('/exer10', [exerciciosController::class, 'lista.exer10']);
Route::post('/listaexer10', [exerciciosController::class, 'numero', 'i', 'resultado']);