@extends('layout')

@section('title', 'Primeiro Exemplo')

@section('conteudo')
    <h1 class="text-center">Formulário</h1>
    <form action="/formulario_resposta" method="POST">
        @csrf
        <div class="mb-3">
            <label for="valor1" class="form-label">Valor 1</label>
            <input type="number" class="form-control" id="valor1" name="valor1" palceholder="Digite o primeiro valor" required>
        </div>
        <div class="mb-3">
            <label for="valor2" class="form-label">Valor 1</label>
            <input type="number" class="form-control" id="valor2" name="valor2" palceholder="Digite o segundo valor" required>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

    @if (isset($soma))
        <div class="alert alert-success" role="alert">
            A soma dos valores é: {{ $soma }}
        </div>
    @endif
    
@endsection