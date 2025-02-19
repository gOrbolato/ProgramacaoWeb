@extends('layout')

@section('conteudo')

<form method="post" action="listaex7">
    @csrf
    
        <label for="raio">Raio:</label>
        <input type="number" id="raio" name="raio">

        <button type="submit">Calcular Perímetro</button>
</form>

    @isset($perimetro)
        <p>O raio do circulo é de {{$perimetro}}</p>
    @endisset
            
@endsection