<?php

    $x = 0;


    while( $x < 10) {

        echo " o x é $x <br>";

        if($x == 5) {
            echo "Chegou no 5, saindo do loop!<br>";
            break; // Sai do loop quando x é igual a 5
        }

        $x++;
    }