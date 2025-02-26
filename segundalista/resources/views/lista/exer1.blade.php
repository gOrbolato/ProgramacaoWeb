@extends('layout')

@section('conteudo')
    
<form method="post" action="listaexer1">
    @csrf
                        
    <label for="valor1">Valor 1:</label>
    <input type="number" step="any" id="valor1" name="valor1" required>

    <label for="valor2">Valor 2:</label>
    <input type="number" step="any" id="valor2" name="valor2" required>

    <button type="submit">Calcular</button>
</form>

    @isset($resultado, $soma)
        <p>Se os valores são iguais, o triplo da soma é: {{$resultado}}</p>
        <p>Se não são iguais, o valor é: {{$soma}}</p>
    @endisset
            
@endsection