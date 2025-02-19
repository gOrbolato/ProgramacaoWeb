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
//----------------------------------------------------------------------------------------------------------------------------------
//lista 1 - ex1
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

//lista 1 - ex2
Route::get('/ex2', function(){
    return view('lista.ex2');
});

Route::post('/listaex2', function(Request $request){
    $celcius = floatval($request->input('celcius'));
    $fahrenheit = ($celcius * 1.8) + 32;
    return view('lista.ex2', compact('fahrenheit'));
});

//lista 1 - ex3
Route::get('/ex3', function(){
    return view('lista.ex3');
});

Route::post('/listaex3', function(Request $request){
    $fahrenheit = floatval($request->input('fahrenheit'));
    $celcius = ($fahrenheit - 32) / 1.8;
    return view('lista.ex3', compact('celcius'));
});

//lista 1 - ex4
Route::get('/ex4', function(){
    return view('lista.ex4');
});

Route::post('/listaex4', function(Request $request){
    $altura = floatval($request->input('altura'));
    $largura = floatval($request->input('largura'));
    $area = $altura * $largura;
    return view('lista.ex4', compact('area'));
});

//lista 1 - ex5
Route::get('/ex5', function(){
    return view('lista.ex5');
});

Route::post('/listaex5', function(Request $request){
    $raio = floatval($request->input('raio'));
    $area = $raio * $raio * 3.14;
    return view('lista.ex5', compact('area'));    
});

//lista 1 - ex6
Route::get('/ex6', function(){
    return view('lista.ex6');
});

Route::post('/listaex6', function(Request $request){
    $largura = floatval($request->input('largura'));
    $altura = floatval($request->input('altura'));
    $area = ($largura * 2) + ($altura * 2);
    return view('lista.ex6', compact('area'));
});

//lista 1 - ex7
Route::get('/ex7', function(){
    return view('lista.ex7');
});

Route::post('/listaex7', function(Request $request){
    $raio = floatval($request->input('raio'));
    $perimetro = $raio * 2 * 3.14;
    return view('lista.ex7', compact('perimetro'));
});

//lista 1 - ex8
Route::get('/ex8', function(){
    return view('lista.ex8');
});

Route::post('/listaex8', function(Request $request){
    $base = floatval($request->input('base'));
    $expoente = floatval($request->input('expoente'));
    $resultado = $base ** $expoente;
    return view('lista.ex8', compact('resultado'));
});

//lista 1 - ex9
Route::get('/ex9', function(){
    return view('lista.ex9');
});

Route::post('/listaex9', function(Request $request){
    $metros = floatval($request->input('metros'));
    $centimetros = $metros * 100;
    return view('lista.ex9', compact('centimetros'));
});

//lista 1 - ex10
Route::get('/ex10', function(){
    return view('lista.ex10');
});

Route::post('/listaex10', function(Request $request){  
    $quilometros = floatval($request->input('quilometros'));
    $milhas = $quilometros / 1.609;
    return view('lista.ex10', compact('milhas'));
});

//lista 1 - ex11
Route::get('/ex11', function(){
    return view('lista.ex11');
});

Route::post('/listaex11', function(Request $request){
    $altura = floatval($request->input('altura'));
    $peso = floatval($request->input('peso'));
    $resultado = $peso / ($altura * $altura);
    return view('lista.ex11', compact('resultado'));
});

//lista 1 - ex12
Route::get('/ex12', function(){
    return view('lista.ex12');
});

Route::post('/listaex12', function(Request $request){
    $preco = floatval($request->input('preco'));
    $desconto = floatval($request->input('desconto'));
    $resultado = $preco - ($preco * ($desconto / 100));
    return view('lista.ex12', compact('resultado'));
});

//lista 1 - ex13
Route::get('/ex13', function(){
    return view('lista.ex13');
});

Route::post('/listaex13', function(Request $request){
    $capital = floatval($request->input('capital'));
    $taxa = floatval($request->input('taxa'));
    $periodo = floatval($request->input('periodo'));
    $resultado = $capital * ($taxa / 100) * $periodo;
    return view('lista.ex13', compact('resultado'));
});

//lista 1 - ex14
Route::get('/ex14', function(){
    return view('lista.ex14');
});

Route::post('/listaex14', function(Request $request){
    $capital = floatval($request->input('capital'));
    $taxa = floatval($request->input('taxa'));
    $periodo = floatval($request->input('periodo'));
    $resultado = $capital * pow(1 + ($taxa / 100), $periodo);
    return view('lista.ex14', compact('resultado'));
});

//lista 1 - ex15
Route::get('/ex15', function(){
    return view('lista.ex15');
});

Route::post('/listaex15', function(Request $request){
    $dias = floatval($request->input('dias'));
    $horas = ($dias * 24, 2);
    $minutos = ($horas * 60, 2);
    $segundos = ($minutos * 60, 2);
    $resultado = "$dias dias, $horas horas, $minutos minutos e $segundos segundos";
    return view('lista.ex15', compact('resultado'));
});