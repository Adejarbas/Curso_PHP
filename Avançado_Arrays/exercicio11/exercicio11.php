<?php
// Função para ordenar números em ordem crescente
function ordenarNumeros($numeros) {
    // Usa a função sort() do PHP para ordenar o array
    // sort() modifica o array original e ordena em ordem crescente
    sort($numeros);
    
    // Retorna o array ordenado
    return $numeros;
}

// Exemplo de uso da função
echo "<h2>Exercício 11 - Ordenar Números</h2>";

// Criando um array de números desordenados
$arrayNumeros = [5, 2, 8, 1, 9, 3, 7, 4, 6];

echo "<h3>Array original:</h3>";
echo "Números: ";
// Mostra o array original
foreach($arrayNumeros as $numero) {
    echo $numero . " ";
}

echo "<br><br>";

// Chama a função para ordenar os números
$numerosOrdenados = ordenarNumeros($arrayNumeros);

echo "<h3>Array ordenado:</h3>";
echo "Números: ";
// Mostra o array ordenado
foreach($numerosOrdenados as $numero) {
    echo $numero . " ";
}

echo "<br><br>";

// Testando com outro array
$outroArray = [15, 3, 27, 8, 11, 1, 19];
echo "<h3>Testando com outro array:</h3>";
echo "Original: ";
foreach($outroArray as $num) {
    echo $num . " ";
}

$outroOrdenado = ordenarNumeros($outroArray);
echo "<br>Ordenado: ";
foreach($outroOrdenado as $num) {
    echo $num . " ";
}

?>