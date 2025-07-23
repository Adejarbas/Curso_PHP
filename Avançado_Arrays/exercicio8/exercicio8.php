<?php

// Função que soma todos os elementos de um array
function somaElementos($array) {
    // Variável para guardar a soma
    $soma = 0;
    
    // Percorre cada elemento do array
    foreach($array as $numero) {
        // Adiciona o número atual na soma
        $soma = $soma + $numero;
    }
    
    // Retorna o resultado da soma
    return $soma;
}

// Testando a função com exemplos
echo "=== Testando a função somaElementos ===<br><br>";

// Teste 1: Array simples
$numeros1 = [1, 2, 3, 4, 5];
$resultado1 = somaElementos($numeros1);
echo "Array: [1, 2, 3, 4, 5]<br>";
echo "Soma: " . $resultado1 . "<br><br>";

// Teste 2: Array com números diferentes
$numeros2 = [10, 20, 30];
$resultado2 = somaElementos($numeros2);
echo "Array: [10, 20, 30]<br>";
echo "Soma: " . $resultado2 . "<br><br>";

// Teste 3: Array com um elemento só
$numeros3 = [100];
$resultado3 = somaElementos($numeros3);
echo "Array: [100]<br>";
echo "Soma: " . $resultado3 . "<br><br>";

// Teste 4: Array com números negativos
$numeros4 = [-5, 10, -3, 8];
$resultado4 = somaElementos($numeros4);
echo "Array: [-5, 10, -3, 8]<br>";
echo "Soma: " . $resultado4 . "<br>";

?>