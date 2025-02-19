@extends('layout')

@section('conteudo')

<form method="post" action="listaex8">
    @csrf

    <label for="base">Base:</label>
    <input type="number" id="base" name="base">
    <label for="expoente">Expoente:</label>
    <input type="number" id="expoente" name="expoente">

    <button type="submit">Calcular</button>
</form>

    @isset($resultado)
        <p>O resultado é {{$resultado}}</p>
    @endisset
            
@endsection