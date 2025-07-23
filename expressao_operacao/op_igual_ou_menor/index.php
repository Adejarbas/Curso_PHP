<?php

    $a = 4;
    $b = 5;
    $c = 6;
    $d = 6;

    // verificaçao de menor ou igual
    if ( $a < $b) {
        echo "$a é menor que $b <br>";
    } else {
        echo "$a não é menor que $b <br>";
    }

    if( $b < $a ) {
        echo "$b é menor que $a <br>";
    } else {
        echo "$b não é menor que $a <br>";
    }

    if( $c <= $d ) {
        echo "$c é menor ou igual a $d <br>";
    } else {
        echo "$c não é menor ou igual a $d <br>";
    }

    if( $d <= $a) {
        echo "$d é menor ou igual a $a <br>";
    } else {
        echo "$d não é menor ou igual a $a <br>";
    }

    if( $a <= $b ) {
        echo "$a é menor ou igual a $b <br>";
    } else {
        echo "$a não é menor ou igual a $b <br>";
    }