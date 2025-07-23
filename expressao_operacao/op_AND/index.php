<?php

    if(5 > 10 && 10 > 5) { //false e true
        echo "É verdade que 5 é maior que 10 e 10 é maior que 5";
    } else {
        echo "É falso que 5 é maior que 10 e 10 é maior que 5";
    }

    echo "<br>";

    if(10 > 2 && 100 > 10) { //true e true
        echo "É verdade que 10 é maior que 2 e 100 é maior que 10";
    } else {
        echo "É falso que 10 é maior que 2 e 100 é maior que 10";
    }

    echo "<br>";

    if(10 < 2 && 100 < 10) { //false e false
        echo "É verdade que 10 é menor que 2 e 100 é menor que 10";
    } else {
        echo "É falso que 10 é menor que 2 e 100 é menor que 10";
    }

    echo "<br>";

    $a = 10;
    $b = 5;
    $c = 12;
    $d = 12;

    if($a > $b && $c == $d) { //true e true
        echo "<br>É verdade que $a é maior que $b e $c é igual a $d";
    } else {
        echo "<br>É falso que $a é maior que $b e $c é igual a $d";
    }

    echo "<br>";

    if($a <= $b && $c >= $d) { //false e true
        echo "É verdade que $a é menor ou igual a $b e $c é maior ou igual a $d";
    } else {
        echo "É falso que $a é menor ou igual a $b e $c é maior ou igual a $d";
    }
    
    echo "<br>";

    if($b === $a && $c > $d) { //false e false
        echo "É veradade que $b é identico a $a e $c é maior que $d";}
    else {
        echo "É falso que $b é identico a $a e $c é maior que $d";}


    if($a > $b && $c == $d && $c ===$a) { //true e true e false
        echo "<br>É verdade que $a é maior que $b e $c é igual a $d e $c é identico a $a";
    } else {
        echo "<br>É falso que $a é maior que $b e $c é igual a $d e $c é identico a $a";
    }    