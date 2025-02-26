@extends('layout')

@section('conteudo')
    
<form method="post" action="listaexer9">
    @csrf
                        
    <label for="numero">Informe um número:</label>
    <input type="number" id="numero" name="numero" min="0" required>

    <button type="submit">Calcular Fatorial</button>
</form>

    @isset($numero, $fatorial)
        <p>O fatorial de {{$numero}} é: {{$fatorial}}</p>
    @endisset
            
@endsection