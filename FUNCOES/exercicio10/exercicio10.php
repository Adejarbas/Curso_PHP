<?php

// Exercício 10 - Contar vogais

function countVowels($string) {
    $contador = 0;
    
    for ($i = 0; $i < strlen($string); $i++) {
        $letra = $string[$i];
        
        if ($letra == 'a' || $letra == 'e' || $letra == 'i' || $letra == 'o' || $letra == 'u' ||
            $letra == 'A' || $letra == 'E' || $letra == 'I' || $letra == 'O' || $letra == 'U') {
            $contador++;
        }
    }
    
    return $contador;
}

// Testando
$palavra = "Hello";
echo "A palavra '$palavra' tem " . countVowels($palavra) . " vogais";

$palavra2 = "Exercício";
echo "<br>A palavra '$palavra2' tem " . countVowels($palavra) . " vogais";

?>