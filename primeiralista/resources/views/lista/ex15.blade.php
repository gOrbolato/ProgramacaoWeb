@extends('layout')

@section('conteudo')

<form method="post" action="listaex15">
    @csrf

    <label for="dias">Valor em dias:</label>
    <input type="number" id="dias" name="dias">

    <button type="submit">Converter</button>
    

</form>

    @isset($resultado)
        <p>A conversão dos dias em tempo é de {{$resultado}}</p>
    @endisset

@endsection