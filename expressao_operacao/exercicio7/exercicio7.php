<?php

    $a = 5;
    $b = 3;

    // verificaçao de igualdade
    if( $a == $b ) {
        echo "$a é igual a $b 1<br>";
    } else {
        echo "$a não é igual a $b 2<br>";
    }

    // verificação de diferente
    if( $a != $b ) {
        echo "$a é diferente de $b 3<br>";
    } else {
        echo "$a não é diferente de $b 4<br>";
    }

    // verificação de identico
    if( $a === $b ) {
        echo "$a é identico a $b 5<br>";
    } else {
        echo "$a não é identico a $b 6<br>";
    }

    // verificação de nao identico
    if( $a !== $b ) {
        echo "$a não é identico a $b 7<br>";
    } else {
        echo "$a é identico a $b 8<br>";
    }