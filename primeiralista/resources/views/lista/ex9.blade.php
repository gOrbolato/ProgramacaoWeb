@extends('layout')

@section('conteudo')

<form method="post" action="listaex9">
    @csrf

    <label for="metros">Valor em metros:</label>
    <input type="number" id="metros" name="metros" >

    <button type="submit">Calcular para centímetros</button>
</form>

    @isset($centimetros)
        <p>A conversão de metros para centímetros é de {{$centimetros}}</p>
    @endisset
            
@endsection