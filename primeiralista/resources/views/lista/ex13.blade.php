@extends('layout')

@section('conteudo')

<form method="post" action="listaex13">
    @csrf

    <label for="capital">Capital (R$):</label>
    <input type="number" id="capital" name="capital">
    <label for="taxa">Taxa de Juros (% ao mês):</label>
    <input type="number" id="taxa" name="taxa">
    <label for="periodo">Período (em meses):</label>
    <input type="number" id="periodo" name="periodo">

    <button type="submit">Calcular Juros Simples</button>

</form>

    @isset($resultado)
        <p>O juros simples é de R$ {{$resultado}}</p>
    @endisset

@endsection