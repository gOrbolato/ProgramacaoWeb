@extends('layout')

@section('conteudo')
<form method="post" action="exer1resp">
    @csrf
                        
    <div class="mb-3">
        <label for="valor1" class="form-label">Informe o primeiro</label>
        <input type="number" id="valor1" name="nota1" class="form-control" required="">
    </div>
                    
    <div class="mb-3">
        <label for="valor2" class="form-label">Informe o segundo</label>
        <input type="number" id="valor2" name="nota2" class="form-control" required="">
    </div>
                    
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

    @isset($soma)
        <p>A soma é {{$soma}}</p>
    @endisset
            
@endsection