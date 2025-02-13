<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ExerciciosController extends Controller{
    public function abrirFormulario(){
        return view('formulario');
    }
    public function calcularFormulario(Request $request){
        $valor1 = intval($request->input('valor1'));
        $valor2 = intval($request->input('valor2'));
        $soma = $valor1 + $valor2;
        return view('formulario', compact('soma'));
    }
}


