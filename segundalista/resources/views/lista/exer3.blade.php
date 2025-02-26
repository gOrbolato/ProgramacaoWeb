@extends('layout')

@section('conteudo')
    
<form method="post" action="listaexer3">
    @csrf
                        
    <label for="valorProduto">Valor do Produto (R$):</label>
    <input type="number" step="any" id="valorProduto" name="valorProduto" required>

    <button type="submit">Calcular Desconto</button>
</form>

    @isset($valorProduto)
        <p>Valor dos produtos com descanso é {{$valorProduto}}</p>
    @endisset
            
@endsection