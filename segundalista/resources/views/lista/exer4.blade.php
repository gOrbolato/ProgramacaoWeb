@extends('layout')

@section('conteudo')
    
<form method="post" action="listaexer4">
    @csrf
                        
    <label for="valorMaximo">Valor Máximo:</label>
    <input type="number" step="any" id="valorMaximo" name="valorMaximo" required>

    <button type="submit">Calcular Números Primos</button>
</form>

    @isset($valorMaximo, $primos)
        <p>Os números primos de 1 até {{$valorMaximo}} são: {{primos}}</p>
    @endisset
            
@endsection