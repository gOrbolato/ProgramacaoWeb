@extends('layout')

@section('conteudo')

<form method="post" action="listaex5">
    @csrf

    <label for="raio">Raio:</label>
    <input type="number" id="raio" name="raio">

    <button type="submit">Calcular Área</button>
</form>

    @isset($area)
        <p>O raio do circulo é de {{$area}}</p>
    @endisset
            
@endsection