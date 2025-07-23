<?php

function sumDigits($numero) {
    // Converte o número para valor absoluto para lidar com números negativos
    $numero = abs($numero);
    
    // Converte o número para string para poder percorrer cada dígito
    $numeroString = (string)$numero;
    
    $soma = 0;
    
    // Percorre cada caractere (dígito) da string
    for ($i = 0; $i < strlen($numeroString); $i++) {
        // Converte o caractere de volta para inteiro e soma
        $soma += (int)$numeroString[$i];
    }
    
    return $soma;
}

// Exemplos de uso da função
echo "Testando a função sumDigits:\n";
echo "sumDigits(123) = " . sumDigits(123) . "\n";        // Resultado: 6 (1+2+3)
echo "sumDigits(456) = " . sumDigits(456) . "\n";        // Resultado: 15 (4+5+6)
echo "sumDigits(999) = " . sumDigits(999) . "\n";        // Resultado: 27 (9+9+9)
echo "sumDigits(1234) = " . sumDigits(1234) . "\n";      // Resultado: 10 (1+2+3+4)
echo "sumDigits(-789) = " . sumDigits(-789) . "\n";      // Resultado: 24 (7+8+9, número negativo tratado como positivo)

?>