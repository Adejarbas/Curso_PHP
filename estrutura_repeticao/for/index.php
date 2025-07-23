<?php


    // Contador; Condição; Incremento;

    $nome = "Daniel";

    for ($i = 0; $i < 10; $i++) {

        if($i == 4) {
            echo " $nome <br>";
        }

        if($i == 8) {
            break; // Sai do loop quando i é igual a 8
        }

        echo "Testando o for $i <br>";
    }