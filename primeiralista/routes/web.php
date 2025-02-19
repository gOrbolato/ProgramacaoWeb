<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::get('/', function(){
    return view('welcome');
});

Route::get('/exer1', function(){
    return view('exer1');
});

Route::get('/exer1resp', function(Request $request){
    $valor1 = floatval($request->input('valor1'));
    $valor2 = floatval($request->input('valor2'));
    $soma = $valor1 + $valor2;
    return view('exer1', compact('soma'));
});

Route::get('/ex1', function(){
    return view('lista.ex1');
});

Route::post('/listaex1', function(Request $request){
    $nota1 = floatval($request->input('nota1'));
    $nota2 = floatval($request->input('nota2'));
    $nota3 = floatval($request->input('nota3'));
    $media = ($nota1 + $nota2 + $nota3) / 3;
    return view('lista.ex1', compact('media'));
});