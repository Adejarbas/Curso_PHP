<?php

    $a = 4;
    $b = 5;
    $c = 6;
    $d = 6;

    // verificaçao de maior ou igual
    if ( $a > $b) {
        echo "$a é maior que $b <br>";
    } else {
        echo "$a não é maior que $b <br>";
    }

    if( $b > $a ) {
        echo "$b é maior que $a <br>";
    } else {
        echo "$b não é maior que $a <br>";
    }

    if( $c >= $d ) {
        echo "$c é maior ou igual a $d <br>";
    } else {
        echo "$c não é maior ou igual a $d <br>";
    }

    if( $d >= $a) {
        echo "$d é maior ou igual a $a <br>";
    } else {
        echo "$d não é maior ou igual a $a <br>";
    }

    if( $a >= $b ) {
        echo "$a é maior ou igual a $b <br>";
    } else {
        echo "$a não é maior ou igual a $b <br>";
    }