<?php

    $nome = "João";
    $a = 15;
    $b = 5;
    $c = 3;
    $d = 2;
    $e = 1;

    if($a > $b && $nome === $nome) { // true e true
        echo "É verdade que $a é maior que $b e o nome é igual a $nome";
    } else {
        echo "É falso que $a é maior que $b e o nome é igual a $nome";
    }

    echo "<br>";

    if(("teste" > 5 ) && 1) { // Agora vai dar false // por algum motivo o PHP não considera a string "teste" como maior que 5, mesmo que seja uma string não vazia
    echo " Verdade que 'teste' é maior que 5 e 1 é verdadeiro";
    } else {
        echo "É falso que 'teste' é maior que 5 e 1 é verdadeiro";
    }

    echo "<br>";

    if($d == $c && $b >= $c) { // true e true
        echo "É verdade que $d é igual a $c e $b é maior ou igual a $c";
    } else {
        echo "É falso que $d é igual a $c e $b é maior ou igual a $c";
    }

