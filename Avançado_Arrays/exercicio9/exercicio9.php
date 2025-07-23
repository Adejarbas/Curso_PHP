<?php

// Função para encontrar o maior elemento de um array
function maiorElemento($array) {
    // Começamos assumindo que o primeiro elemento é o maior
    $maior = $array[0];
    
    // Percorremos o array a partir do segundo elemento
    for ($i = 1; $i < count($array); $i++) {
        // Se encontrarmos um elemento maior, atualizamos a variável
        if ($array[$i] > $maior) {
            $maior = $array[$i];
        }
    }
    
    // Retornamos o maior elemento encontrado
    return $maior;
}

// Exemplos de teste
echo "=== Testando a função maiorElemento ===\n\n";

// Teste 1: Array com números positivos
$numeros1 = [3, 7, 2, 9, 1, 8];
echo "Array: [" . implode(", ", $numeros1) . "]\n";
echo "Maior elemento: " . maiorElemento($numeros1) . "\n\n";

// Teste 2: Array com números negativos
$numeros2 = [-5, -2, -8, -1, -10];
echo "Array: [" . implode(", ", $numeros2) . "]\n";
echo "Maior elemento: " . maiorElemento($numeros2) . "\n\n";

// Teste 3: Array com números mistos (positivos e negativos)
$numeros3 = [-3, 15, -7, 22, 0, -1];
echo "Array: [" . implode(", ", $numeros3) . "]\n";
echo "Maior elemento: " . maiorElemento($numeros3) . "\n\n";

// Teste 4: Array com apenas um elemento
$numeros4 = [42];
echo "Array: [" . implode(", ", $numeros4) . "]\n";
echo "Maior elemento: " . maiorElemento($numeros4) . "\n\n";

// Teste 5: Array com números decimais
$numeros5 = [3.5, 2.1, 8.9, 1.2, 7.3];
echo "Array: [" . implode(", ", $numeros5) . "]\n";
echo "Maior elemento: " . maiorElemento($numeros5) . "\n\n";

?>