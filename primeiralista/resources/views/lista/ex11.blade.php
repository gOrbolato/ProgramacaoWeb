@extends('layout')

@section('conteudo')

<form method="post" action="listaex11">
    @csrf

    <label for="altura">Altura:</label>
    <input type="number" id="altura" name="altura" >
    <label for="peso">Peso:</label> 
    <input type="number" id="peso" name="peso" >

    <button type="submit">Calcular IMC</button>

</form>

    @isset($resultado)
        <p>O seu IMC é de {{$resultado}}</p>
    @endisset
        
@endsection