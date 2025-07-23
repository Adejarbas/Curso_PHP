<?php

    $nomes = ["João", "Maria", "Daniel", "José"];
    $idade = 30;

    foreach ($nomes as $nome) {
        echo "O Nome do indice atual é: $nome <br>";
        if($nome == "Daniel") {
            echo "Salve Daniel! $idade <br>";
        }
    }