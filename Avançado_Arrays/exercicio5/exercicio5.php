<?php

    $raca = "Vira-Lata";
    $nome = "Rex";
    $idade = 5;
    $cor = "Marrom";

    $turca = compact('raca', 'nome', 'idade', 'cor');

    print_r($turca);
    echo "<br>";

    foreach ($turca as $key => $value) {
        echo "$key: $value <br>";
    }