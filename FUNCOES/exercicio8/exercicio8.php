<?php

    function sumEvenNumbers($num){
        $soma = 0;
        
        // Loop de 1 até o número fornecido
        for($i = 1; $i <= $num; $i++){
            // Verifica se o número é par
            if($i % 2 == 0){
                $soma += $i; // Adiciona o número par à soma
            }
        }
        
        return $soma; // Retorna a soma total dos números pares
    }

    // Exemplo de uso da função
    echo "Soma dos números pares de 1 a 10: " . sumEvenNumbers(10) . "<br>";
    echo "Soma dos números pares de 1 a 20: " . sumEvenNumbers(20) . "<br>";
    echo "Soma dos números pares de 1 a 5: " . sumEvenNumbers(5) . "<br>";

?>