@extends('layout')

@section('conteudo')
    
<form method="post" action="listaexer5">
    @csrf
                        
    <label for="numeroMes">Número do Mês (1 a 12):</label>
    <input type="number" id="numeroMes" name="numeroMes" min="1" max="12" required>

    <button type="submit">Verificar Mês</button>
</form>

    @isset($numeroMes, $nomeMes)
        <p>O mês associado ao número {{$numeroMes}} é: {{$nomeMes}}</p>
    @endisset
            
@endsection