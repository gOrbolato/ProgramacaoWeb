@extends('layout')

@section('conteudo')

<form method="post" action="listaex10">
    @csrf

    <label for="quilometros">Valor em quilômetros:</label>
    <input type="number" id="quilometros" name="quilometros" >

    <button type="submit">Calcular para milhas</button>
</form>

    @isset($milhas)
        <p>A conversão de quilômetros para milhas é de {{$milhas}}</p>
    @endisset
            
@endsection