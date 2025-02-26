<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class exerciciosController extends Controller{
    public function exerTodos(){
        return view('lista.exercicios');
    }

    public function listaexerTodos(Request $request){
        // Validação básica
        $request->validate([
            'valor' => 'required|numeric',
            'exercicio' => 'required|integer|min:1|max:10',
        ]);

        $valor = $request->input('valor');
        $exercicio = $request->input('exercicio');

        // Executa o exercício selecionado
        switch ($exercicio) {
            case 1:
                $mensagem = $this->exer1($valor);
                break;
            case 2:
                $mensagem = $this->exer2($valor);
                break;
            case 3:
                $mensagem = $this->exer3($valor);
                break;
            case 4:
                $mensagem = $this->exer4($valor);
                break;
            case 5:
                $mensagem = $this->exer5($valor);
                break;
            case 6:
                $mensagem = $this->exer6($valor);
                break;
            case 7:
                $mensagem = $this->exer7($valor);
                break;
            case 8:
                $mensagem = $this->exer8($valor);
                break;
            case 9:
                $mensagem = $this->exer9($valor);
                break;
            case 10:
                $mensagem = $this->exer10($valor);
                break;
            default:
                $mensagem = "Exercício inválido.";
                break;
        }
        return view('lista.exercicios', compact('mensagem'));
    }

    private function exer1($valor){
        // Simulação de dois valores
        $valor1 = $valor;
        $valor2 = $valor + 1;

        // Calcula a soma dos dois valores
        $soma = $valor1 + $valor2;

        // Verifica se os valores são iguais
        if ($valor1 === $valor2) {
            // Se forem iguais, retorna o triplo da soma
            $resultado = $soma * 3;
            return "Os valores são iguais. O triplo da soma é: " . number_format($resultado, 2);
        } else {
            // Se não forem iguais, retorna apenas a soma
            return "A soma dos valores é: " . number_format($soma, 2);
        }
    }

    private function exer2($valor){
        $valorA = $valor;
        $valorB = $valor + 1; // Simulação de dois valores
        if ($valorA === $valorB) {
            return "Números iguais: " . number_format($valorA, 2);
        } else {
            $primeiro = min($valorA, $valorB);
            $segundo = max($valorA, $valorB);
            return "$primeiro $segundo";
        }
    }

    private function exer3($valor){
        if ($valor > 100) {
            $desconto = $valor * 0.15;
            $novoValor = $valor - $desconto;
            return "O produto teve um desconto de 15%!<br>
                    Valor original: R$ " . number_format($valor, 2, ',', '.') . "<br>
                    Desconto aplicado: R$ " . number_format($desconto, 2, ',', '.') . "<br>
                    Novo valor com desconto: R$ " . number_format($novoValor, 2, ',', '.');
        } else {
            return "O valor do produto é R$ " . number_format($valor, 2, ',', '.') . ". Não há desconto disponível.";
        }
    }

    private function exer4($valor){
        $primos = [];
        for ($i = 1; $i <= $valor; $i++) {
            if ($this->ehPrimo($i)) {
                $primos[] = $i;
            }
        }
        return count($primos) > 0
            ? "Os números primos de 1 até $valor são: " . implode(", ", $primos)
            : "Não há números primos no intervalo de 1 até $valor.";
    }

    private function ehPrimo($numero){
        if ($numero <= 1) return false;
        for ($i = 2; $i <= sqrt($numero); $i++) {
            if ($numero % $i === 0) return false;
        }
        return true;
    }

    private function exer5($valor){
        $meses = [
            1 => "Janeiro", 2 => "Fevereiro", 3 => "Março", 4 => "Abril",
            5 => "Maio", 6 => "Junho", 7 => "Julho", 8 => "Agosto",
            9 => "Setembro", 10 => "Outubro", 11 => "Novembro", 12 => "Dezembro"
        ];
        return isset($meses[$valor])
            ? "O mês associado ao número $valor é: " . $meses[$valor]
            : "Mês inválido!";
    }

    private function exer6($valor){
        $numeros = range(1, $valor);
        return "Números de 1 até $valor: " . implode(" ", $numeros);
    }

    private function exer7($valor){
        $soma = array_sum(range(1, $valor));
        return "A soma dos números de 1 até $valor é: $soma";
    }

    private function exer8($valor){
        $contagem = range($valor, 1);
        return "Contagem regressiva de $valor até 1: " . implode(" ", $contagem);
    }

    private function exer9($valor){
        $fatorial = 1;
        for ($i = 1; $i <= $valor; $i++) {
            $fatorial *= $i;
        }
        return "O fatorial de $valor é: $fatorial";
    }

    private function exer10($valor){
        $tabuada = [];
        for ($i = 1; $i <= 10; $i++) {
            $tabuada[] = "$valor x $i = " . ($valor * $i);
        }
        return "Tabuada do número $valor:<br>" . implode("<br>", $tabuada);
    }
}