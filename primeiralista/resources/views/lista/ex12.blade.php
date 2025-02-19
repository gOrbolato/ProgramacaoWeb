@extends('layout')

@section('conteudo')

<form method="post" action="listaex12">
    @csrf

    <label for="preco">Preço (R$):</label>
    <input type="number" id="preco" name="preco">
    <label for="desconto">Percentual de Desconto (%):</label>
    <input type="number" id="desconto" name="desconto">

    <button type="submit">Calcular</button>

</form>

    @isset($resultado)
        <p>O seu preço com desconto é de R$ {{$resultado}}</p>
    @endisset
    
@endsection