@extends('layout')

@section('conteudo')
    
<form method="post" action="listaexer10">
    @csrf
                        
    <label for="numero">Informe um número:</label>
    <input type="number" id="numero" name="numero" required>

    <button type="submit">Gerar Tabuada</button>
</form>

    @isset($numero, $i, $resultado)
        <p>Tabuada do número {{$numero}}:</p>
        <p>{{$numero}} x {{$i}} = {{$resultado}}</p>
    @endisset
            
@endsection