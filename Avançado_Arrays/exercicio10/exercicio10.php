<?php

// Função para encontrar números pares em um array
// Verifica se a função ainda não foi declarada para evitar erro de redeclaração
if (!function_exists('encontrarPares')) {
    function encontrarPares($numeros) {
        // Cria um array vazio para guardar os números pares
        $pares = array();
        
        // Percorre cada número do array original
        for ($i = 0; $i < count($numeros); $i++) {
            // Verifica se o número é par (resto da divisão por 2 é zero)
            if ($numeros[$i] % 2 == 0) {
                // Se for par, adiciona no array de pares
                $pares[] = $numeros[$i];
            }
        }
        
        // Retorna o array com os números pares
        return $pares;
    }
}

// Exemplo de uso da função
echo "<h2>Exercício 10 - Encontrar Números Pares</h2>";

// Array de teste com números variados
$numeros = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 15, 20, 33, 44);

echo "<strong>Array original:</strong><br>";
echo "[ ";
for ($i = 0; $i < count($numeros); $i++) {
    echo $numeros[$i];
    if ($i < count($numeros) - 1) {
        echo ", ";
    }
}
echo " ]<br><br>";

// Chama a função para encontrar os pares
$numerosPares = encontrarPares($numeros);

echo "<strong>Números pares encontrados:</strong><br>";
echo "[ ";
for ($i = 0; $i < count($numerosPares); $i++) {
    echo $numerosPares[$i];
    if ($i < count($numerosPares) - 1) {
        echo ", ";
    }
}
echo " ]<br><br>";

// Teste com outro array
$outroTeste = array(11, 13, 15, 17, 19); // Só números ímpares
$paresDoSegundoTeste = encontrarPares($outroTeste);

echo "<strong>Segundo teste (só números ímpares):</strong><br>";
echo "Array original: [ ";
for ($i = 0; $i < count($outroTeste); $i++) {
    echo $outroTeste[$i];
    if ($i < count($outroTeste) - 1) {
        echo ", ";
    }
}
echo " ]<br>";

echo "Números pares: [ ";
if (count($paresDoSegundoTeste) > 0) {
    for ($i = 0; $i < count($paresDoSegundoTeste); $i++) {
        echo $paresDoSegundoTeste[$i];
        if ($i < count($paresDoSegundoTeste) - 1) {
            echo ", ";
        }
    }
} else {
    echo "nenhum número par encontrado";
}
echo " ]<br>";

?>