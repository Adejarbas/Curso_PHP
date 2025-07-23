<?php

    $a = 10;

    while ($a > 0 ) {

        if($a == 5 || $a == 7) {

            echo "Pulou o número $a <br>";

            $a--;
            continue;
        }

        if($a == 2 ) {

            echo "Chegou no 2, saindo do loop!<br>";
            break; // Sai do loop quando a é igual a 2
        }

        echo "Executando o loop com a = $a <br>";

        $a--;
    }