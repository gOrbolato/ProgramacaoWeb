@extends('layout')

@section('conteudo')
    
<form method="post" action="listaex3">
    @csrf
                        
    <div class="mb-3">
        <label for="fahrenheit" class="form-label">Temperatura em Fahrenheit</label>
        <input type="number" id="fahrenheit" name="fahrenheit" class="form-control"> 
    </div>            
    <button type="submit" class="btn btn-primary">Converter</button>
</form>

    @isset($celcius)
        <p>A temperatura em {{$celcius}}</p>
    @endisset
            
@endsection