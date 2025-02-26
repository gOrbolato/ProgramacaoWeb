@extends('layout')

@section('conteudo')
    
<form method="post" action="listaexer2">
    @csrf
    <label for="valorA">Valor A:</label>
    <input type="number" step="any" id="valorA" name="valorA" required>

    <label for="valorB">Valor B:</label>
    <input type="number" step="any" id="valorB" name="valorB" required>

    <button type="submit">Verificar</button>
</form>

@isset($primeiro, $segundo)
        <p>Os valores em ordem são {{$primeiro}} e {{$segundo}}</p>
    @endisset
            
@endsection