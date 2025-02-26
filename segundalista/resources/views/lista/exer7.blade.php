@extends('layout')

@section('conteudo')
    
<form method="post" action="listaexer7">
    @csrf
                        
    <label for="numero">Informe um número:</label>
    <input type="number" id="numero" name="numero" min="1" required>

    <button type="submit">Calcular Soma</button>
</form>

    @isset($numero, $soma)
        <p>A soma dos números de 1 até {{$numero}} é: {{$soma}}</p>
    @endisset
            
@endsection