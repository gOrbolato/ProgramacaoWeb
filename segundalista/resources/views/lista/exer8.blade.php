@extends('layout')

@section('conteudo')
    
<form method="post" action="listaexer8">
    @csrf
                        
    <label for="numero">Informe um número:</label>
    <input type="number" id="numero" name="numero" min="1" required>

    <button type="submit">Gerar Contagem Regressiva</button>
</form>

    @isset($numero, $contador)
        <p>Contagem regressiva de {{$numero}} até 1: {{contador}}</p>
    @endisset
            
@endsection