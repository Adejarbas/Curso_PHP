<?php

    $a = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];

    $i = 0;

    while  ($i < count($a)) {

        $numeroAtual = $a[$i];

        if($numeroAtual == 30 || $numeroAtual == 40) {

            $i++;
            continue; // Pula os índices 30 e 40
        }

       echo "O valor do índice $i é: " . $a[$i] . "<br>";

        $i++;
    }