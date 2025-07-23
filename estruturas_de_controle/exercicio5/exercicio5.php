<?php

    $nummero1 = 10;
    $numero2 = 50;
    $numero3 = 120;
    $string1 = "teste";


    if(is_int($nummero1) || is_float($nummero1)) {

        $multi1 = $nummero1 * 2;

        if($multi1 > 100) {
            echo "O número $nummero1 multiplicado por 2 é maior que 100: $multi1 <br>";
        } else {
            echo "O número $nummero1 multiplicado por 2 não é maior que 100: $multi1 <br>";
        }

    } else {
        echo "O número $nummero1 não é um inteiro ou float. <br>";
    }

    if(is_int($numero2) || is_float($numero2)) {

        $multi2 = $numero2 * 2;

        if($multi2 > 100) {
            echo "O número $numero2 multiplicado por 2 é maior que 100: $multi2 <br>";
        } else {
            echo "O número $numero2 multiplicado por 2 não é maior que 100: $multi2 <br>";
        }

    } else {
        echo "O número $numero2 não é um inteiro ou float. <br>";
    }

    if(is_int($numero3) || is_float($numero3)) {

        $multi3 = $numero3 * 2;

        if($multi3 > 100) {
            echo "O número $numero3 multiplicado por 2 é maior que 100: $multi3 <br>";
        } else {
            echo "O número $numero3 multiplicado por 2 não é maior que 100: $multi3 <br>";
        }

    } else {
        echo "O número $numero3 não é um inteiro ou float. <br>";
    }

    if(is_int($string1) || is_float($string1)) {
        echo "A variável $string1 é um número <br>";

        $multi4 = $string1 * 2; // Tentativa de multiplicar uma string por 2
        if($multi4 > 100) {
            echo "A string $string1 multiplicada por 2 é maior que 100: $multi4 <br>";
        } else {
            echo "A string $string1 multiplicada por 2 não é maior que 100: $multi4 <br>";
        }

    } else {
        echo "A variável $string1 não é uma número. <br>";
    }
