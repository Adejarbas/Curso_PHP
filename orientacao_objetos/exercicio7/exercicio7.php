<?php

// Classe Calculadora para operações matemáticas básicas
class Calculadora {
    
    // Método para somar dois números
    public function somar($a, $b) {
        return $a + $b;
    }
    
    // Método para subtrair dois números (a - b)
    public function subtrair($a, $b) {
        return $a - $b;
    }
    
    // Método para multiplicar dois números
    public function multiplicar($a, $b) {
        return $a * $b;
    }
    
    // Método para dividir dois números (a / b)
    public function dividir($a, $b) {
        // Verificar se o segundo número não é zero para evitar erro
        if ($b == 0) {
            return "Erro: Não é possível dividir por zero!";
        }
        return $a / $b;
    }
}

// Exemplo de uso da classe Calculadora
echo "<h2>Testando a Calculadora</h2>";

// Criar um objeto da classe Calculadora
$calc = new Calculadora();

// Testando os métodos
$num1 = 10;
$num2 = 5;

echo "<p><strong>Números utilizados:</strong> $num1 e $num2</p>";

// Testando soma
$resultado_soma = $calc->somar($num1, $num2);
echo "<p>Soma: $num1 + $num2 = $resultado_soma</p>";

// Testando subtração
$resultado_subtracao = $calc->subtrair($num1, $num2);
echo "<p>Subtração: $num1 - $num2 = $resultado_subtracao</p>";

// Testando multiplicação
$resultado_multiplicacao = $calc->multiplicar($num1, $num2);
echo "<p>Multiplicação: $num1 × $num2 = $resultado_multiplicacao</p>";

// Testando divisão
$resultado_divisao = $calc->dividir($num1, $num2);
echo "<p>Divisão: $num1 ÷ $num2 = $resultado_divisao</p>";

// Testando divisão por zero
echo "<hr>";
echo "<p><strong>Testando divisão por zero:</strong></p>";
$resultado_divisao_zero = $calc->dividir($num1, 0);
echo "<p>Divisão: $num1 ÷ 0 = $resultado_divisao_zero</p>";

?>