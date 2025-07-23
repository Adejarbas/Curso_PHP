<?php

    // Verificar idade.

    $a = 15;
    $b = 20;
    $c = 7;

    $maiorIdade = 18;

    if($a >= $maiorIdade) {
        echo "Você é maior de idade <br>";
    } else {
        echo "Você é menor de idade <br>";
    }

    if($b >= $maiorIdade) {
        echo "Você é maior de idade <br>";
    } else {
        echo "Você é menor de idade <br>";
    }

    if($c >= $maiorIdade) {
        echo "Você é maior de idade <br>";
    } else {
        echo "Você é menor de idade <br>";
    }

    if($a >= $maiorIdade && $b >= 18 && $c >= 18) {
        echo "Todos são maiores de idade <br>";
    } else {
        echo "Nem todos são maiores de idade <br>";
    }
    
    if($a < $maiorIdade || $b < 18 || $c < 18) {
        echo "Pelo menos um é menor de idade <br>";
    } else {
        echo "Todos são maiores de idade <br>";
    }

