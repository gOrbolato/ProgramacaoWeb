<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Exercícios</title>
</head>
<body>
    <h1>Lista de Exercícios</h1>

    <!-- Formulário -->
    <form method="post" action="{{ route('listaexerTodos') }}">
        @csrf

        <!-- Campo de entrada -->
        <label for="valor">Valor:</label>
        <input type="number" step="any" id="valor" name="valor" required>
        <br><br>

        <!-- Seleção do exercício -->
        <label for="exercicio">Escolha o exercício:</label>
        <select id="exercicio" name="exercicio" required>
            <option value="1">Exer 1 - Soma de Valores</option>
            <option value="2">Exer 2 - Ordenação ou igualdade</option>
            <option value="3">Exer 3 - Desconto em produto</option>
            <option value="4">Exer 4 - Números primos</option>
            <option value="5">Exer 5 - Nome do mês</option>
            <option value="6">Exer 6 - Contagem de números</option>
            <option value="7">Exer 7 - Soma dos números</option>
            <option value="8">Exer 8 - Contagem regressiva</option>
            <option value="9">Exer 9 - Fatorial</option>
            <option value="10">Exer 10 - Tabuada</option>
        </select>
        <br><br>

        <!-- Botão de envio -->
        <button type="submit">Executar</button>
    </form>

    <!-- Resultado -->
    @isset($mensagem)
        <h2>Resultado:</h2>
        <p>{!! $mensagem !!}</p>
    @endisset
</body>
</html>