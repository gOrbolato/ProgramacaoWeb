@extends('layout')

@section('conteudo')
    
<form method="post" action="listaexer6">
    @csrf
                        
    <label for="numeroMes">Número do Mês (1 a 12):</label>
    <input type="number" id="numeroMes" name="numeroMes" min="1" max="12" required>

    <button type="submit">Verificar Mês</button>
</form>

    @isset($numero)
        <p>O número é de 1 até {{$numero}}</p>
    @endisset
            
@endsection