<?php


    $x = 4;

    while ( $x < 30 ) {

        echo "O valor de x é: $x <br>";

        if($x == 24) {
            echo "Chegou no 5, saindo do loop!<br>";
            break; // Sai do loop quando x é igual a 5
        }

        $x = $x + 2;
    }