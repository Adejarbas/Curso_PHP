<?php

    if(12 < 5 || "João" === "João") { // false ou true
        echo "É verdade que 12 é menor que 5 ou o nome é igual a João";
    } else {
        echo "É falso que 12 é menor que 5 ou o nome é igual a João";
    }

    echo "<br>";

    if(1 > 5 || 1) { // false ou true
        echo "<br>É verdade que 1 é maior que 5 ou 1 é verdadeiro";
    } else {
        echo "<br>É falso que 1 é maior que 5 ou 1 é verdadeiro";
    }

    echo "<br>";

    if(20 === '20' || 51 >= 31) { // ERA PRA DAR FALSE
        echo "<br>É verdade que 20 é identico a '20' ou 51 é maior ou igual a 31";
    } else {
        echo "<br>É falso que 20 é identico a '20' ou 51 é maior ou igual a 31";
    }

    if(20 == '20' || 51 >= 31) {
        echo "<br>É verdade que 20 é identico a '20' ou 51 é maior ou igual a 31";
    } else {
        echo "<br>É falso que 20 é identico a '20' ou 51 é maior ou igual a 31";
    }