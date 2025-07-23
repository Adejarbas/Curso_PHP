<?php


    echo 5 / 2;
    echo "<br>";

    if(is_float(5 / 2)) {
        echo "É float";
    } else {
        echo "Não é float";
    }
    echo "<br>";
    echo 2 . 3;
    echo "<br>";

    if(is_string(2 . 3)) {
        echo "É string";
    };

    echo "<br>";

    $nome = "Daniel";
    $sobrenome = "Rodrigues";

    $nomeCompleto = $nome . " " . $sobrenome;

    echo $nomeCompleto;
    echo "<br>";