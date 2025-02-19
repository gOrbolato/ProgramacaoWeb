@extends('layout')

@section('conteudo')
    
<form method="post" action="listaex2">
    @csrf
                        
    <div class="mb-3">
        <label for="celcius" class="form-label">Temperatura em Celcius</label>
        <input type="number" id="celcius" name="celcius" class="form-control"> 
    </div>            
    <button type="submit" class="btn btn-primary">Converter</button>
</form>

    @isset($fahrenheit)
        <p>A temperatura em {{$fahrenheit}}</p>
    @endisset
            
@endsection