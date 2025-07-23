<?php

    $x = 1;

    while ($x <= 10) {
        echo " Loop externo $x <br>";

        // Segundo contador
        $j = 1;

        while ($j <= 5) {
            echo " Loop interno $j <br>";

            // Incremento do contador interno
            $j++;
        }

        $x++;
    }

