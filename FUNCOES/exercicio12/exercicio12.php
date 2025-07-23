<?php

// Função simples para verificar se um número é primo
function isPrime($numero) {
    // Se o número é menor que 2, não é primo
    if ($numero < 2) {
        return false;
    }
    
    // Testamos se o número tem algum divisor de 2 até ele mesmo - 1
    for ($i = 2; $i < $numero; $i++) {
        // Se o resto da divisão for 0, encontramos um divisor
        if ($numero % $i == 0) {
            return false; // Não é primo
        }
    }
    
    // Se chegou até aqui, é primo
    return true;
}

// Testando números de 1 a 10
for ($num = 1; $num <= 10; $num++) {
    if (isPrime($num)) {
        echo "<p>$num é primo</p>";
    } else {
        echo "<p>$num não é primo</p>";
    }
}

// Testando alguns números específicos
echo "<h3>Outros testes:</h3>";
$teste = 13;
echo "<p>$teste é primo? " . (isPrime($teste) ? "Sim" : "Não") . "</p>";

$teste = 15;
echo "<p>$teste é primo? " . (isPrime($teste) ? "Sim" : "Não") . "</p>";

?>