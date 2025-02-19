@extends('layout')

@section('conteudo')

<form method="post" action="listaex6">
    @csrf

    <label for="largura">Largura:</label>
    <input type="number" id="largura" name="largura">

    <label for="altura">Altura:</label>
    <input type="number" id="altura" name="altura">

    <button type="submit">Calcular Área</button>
</form>

    @isset($area)
        <p>A área do retângulo é de {{$area}}</p>
    @endisset
            
@endsection