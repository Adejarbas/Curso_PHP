<?php

    $a = 10;

    $b = 15;

    function testeEscopo() {

        $a = 5; // Variável local, só existe dentro da função

        global $b;

        $a++;
        $b++; // Acessa a variável global $b

        echo "Escopo local de A: $a <br>";
        echo "Escopo global de B: $b <br>";
    }

    echo "Escopo global de A: $a <br>";
    echo "Escopo global de B: $b <br>";

    testeEscopo(); // Chama a função que imprime o valor de A no escopo local

    echo "Escopo global de B 2: $b <br>";