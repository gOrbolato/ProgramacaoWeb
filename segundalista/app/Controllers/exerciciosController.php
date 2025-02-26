<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class exerciciosController extends Controller{
// exer 1
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        // Obtém os valores dos campos 'valor1' e 'valor2' enviados pelo formulário
        $valor1 = floatval($_POST['valor1']);
        $valor2 = floatval($_POST['valor2']);
        // Calcula a soma dos dois valores
        $soma = $valor1 + $valor2;
        // Verifica se os valores são iguais
        if ($valor1 === $valor2){
            // Se forem iguais, retorna o triplo da soma
            $resultado = $soma * 3;
            echo "<h2>Resultado:</h2>";
            echo "<p>Os valores são iguais. O triplo da soma é: " . number_format($resultado, 2) . "</p>";
        } else{
            // Se não forem iguais, retorna apenas a soma
            echo "<h2>Resultado:</h2>";
            echo "<p>A soma dos valores é: " . number_format($soma, 2) . "</p>";
        }
    }
// exer2
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtém os valores dos campos 'valorA' e 'valorB' enviados pelo formulário
        $valorA = floatval($_POST['valorA']);
        $valorB = floatval($_POST['valorB']);

        // Verifica se os valores são iguais
        if ($valorA === $valorB) {
            echo "<h2>Resultado:</h2>";
            echo "<p>Números iguais: " . number_format($valorA, 2) . "</p>";
        } else {
            // Ordena os valores em ordem crescente
            if ($valorA < $valorB) {
                $primeiro = $valorA;
                $segundo = $valorB;
            } else {
                $primeiro = $valorB;
                $segundo = $valorA;
            }

            echo "<h2>Resultado:</h2>";
            echo "<p>$primeiro $segundo</p>";
        }
    }
// exer 3
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtém o valor do campo 'valorProduto' enviado pelo formulário
        $valorProduto = floatval($_POST['valorProduto']);

        // Verifica se o valor é superior a R$ 100,00
        if ($valorProduto > 100) {
            // Calcula o desconto de 15%
            $desconto = $valorProduto * 0.15;
            $novoValor = $valorProduto - $desconto;

            echo "<h2>Resultado:</h2>";
            echo "<p>O produto teve um desconto de 15%!</p>";
            echo "<p>Valor original: R$ " . number_format($valorProduto, 2, ',', '.') . "</p>";
            echo "<p>Desconto aplicado: R$ " . number_format($desconto, 2, ',', '.') . "</p>";
            echo "<p>Novo valor com desconto: R$ " . number_format($novoValor, 2, ',', '.') . "</p>";
        } else {
            // Caso o valor seja menor ou igual a R$ 100,00
            echo "<h2>Resultado:</h2>";
            echo "<p>O valor do produto é R$ " . number_format($valorProduto, 2, ',', '.') . ". Não há desconto disponível.</p>";
        }
    }
// exer 4
    function ehPrimo($numero) {
        if ($numero <= 1) {
            return false; // Números menores ou iguais a 1 não são primos
        }
        for ($i = 2; $i <= sqrt($numero); $i++) {
            if ($numero % $i === 0) {
                return false; // Se divisível por algum número, não é primo
            }
        }
        return true; // É primo
    }

    // Verifica se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtém o valor máximo enviado pelo formulário
        $valorMaximo = intval($_POST['valorMaximo']);

        // Array para armazenar os números primos encontrados
        $primos = [];

        // Itera de 1 até o valor máximo para encontrar números primos
        for ($i = 1; $i <= $valorMaximo; $i++) {
            if (ehPrimo($i)) {
                $primos[] = $i; // Adiciona o número primo ao array
            }
        }

        // Exibe os resultados
        echo "<h2>Resultado:</h2>";
        if (count($primos) > 0) {
            echo "<p>Os números primos de 1 até $valorMaximo são:</p>";
            echo "<p>" . implode(", ", $primos) . "</p>";
        } else {
            echo "<p>Não há números primos no intervalo de 1 até $valorMaximo.</p>";
        }
    }
// exer 5
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtém o número do mês enviado pelo formulário
        $numeroMes = intval($_POST['numeroMes']);

        // Variável para armazenar o nome do mês
        $nomeMes = "";

        // Estrutura switch para determinar o nome do mês
        switch ($numeroMes) {
            case 1:
                $nomeMes = "Janeiro";
                break;
            case 2:
                $nomeMes = "Fevereiro";
                break;
            case 3:
                $nomeMes = "Março";
                break;
            case 4:
                $nomeMes = "Abril";
                break;
            case 5:
                $nomeMes = "Maio";
                break;
            case 6:
                $nomeMes = "Junho";
                break;
            case 7:
                $nomeMes = "Julho";
                break;
            case 8:
                $nomeMes = "Agosto";
                break;
            case 9:
                $nomeMes = "Setembro";
                break;
            case 10:
                $nomeMes = "Outubro";
                break;
            case 11:
                $nomeMes = "Novembro";
                break;
            case 12:
                $nomeMes = "Dezembro";
                break;
            default:
                $nomeMes = "Mês inválido!";
                break;
        }

        // Exibe o resultado
        echo "<h2>Resultado:</h2>";
        echo "<p>O mês associado ao número $numeroMes é: $nomeMes</p>";
    }
// exer 6
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtém o número informado pelo usuário
        $numero = intval($_POST['numero']);

        // Verifica se o número é maior que zero
        if ($numero > 0) {
            echo "<h2>Resultado:</h2>";
            echo "<p>Números de 1 até $numero:</p>";

            // Loop for para imprimir os números de 1 até o número informado
            for ($i = 1; $i <= $numero; $i++) {
                echo "$i ";
            }
        } else {
            echo "<h2>Resultado:</h2>";
            echo "<p>Por favor, insira um número maior que zero.</p>";
        }
    }
// exer 7
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtém o número informado pelo usuário
        $numero = intval($_POST['numero']);

        // Verifica se o número é maior que zero
        if ($numero > 0) {
            // Inicializa a variável de soma
            $soma = 0;
            $contador = 1;

            // Loop while para somar os números de 1 até o número informado
            while ($contador <= $numero) {
                $soma += $contador; // Adiciona o valor do contador à soma
                $contador++;        // Incrementa o contador
            }

            // Exibe o resultado
            echo "<h2>Resultado:</h2>";
            echo "<p>A soma dos números de 1 até $numero é: $soma</p>";
        } else {
            echo "<h2>Resultado:</h2>";
            echo "<p>Por favor, insira um número maior que zero.</p>";
        }
    }
//exer 8
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtém o número informado pelo usuário
        $numero = intval($_POST['numero']);

        // Verifica se o número é maior que zero
        if ($numero > 0) {
            echo "<h2>Resultado:</h2>";
            echo "<p>Contagem regressiva de $numero até 1:</p>";

            // Loop do-while para exibir a contagem regressiva
            $contador = $numero;
            do {
                echo "$contador ";
                $contador--; // Decrementa o contador
            } while ($contador >= 1);
        } else {
            echo "<h2>Resultado:</h2>";
            echo "<p>Por favor, insira um número maior que zero.</p>";
        }
    }
//exer 9
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtém o número informado pelo usuário
        $numero = intval($_POST['numero']);

        // Verifica se o número é maior ou igual a zero
        if ($numero >= 0) {
            // Inicializa a variável do fatorial
            $fatorial = 1;

            // Loop for para calcular o fatorial
            for ($i = 1; $i <= $numero; $i++) {
                $fatorial *= $i; // Multiplica o fatorial pelo valor atual de $i
            }

            // Exibe o resultado
            echo "<h2>Resultado:</h2>";
            echo "<p>O fatorial de $numero é: $fatorial</p>";
        } else {
            echo "<h2>Resultado:</h2>";
            echo "<p>Por favor, insira um número maior ou igual a zero.</p>";
        }
    }
// exer 10
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtém o número informado pelo usuário
        $numero = intval($_POST['numero']);

        echo "<h2>Resultado:</h2>";
        echo "<p>Tabuada do número $numero:</p>";

        // Loop for para gerar a tabuada de 1 a 10
        for ($i = 1; $i <= 10; $i++) {
            $resultado = $numero * $i;
            echo "$numero x $i = $resultado<br>";
        }
    }
}