<?php

    $array = range(1, 20); // Cria um array com valores de 1 a 20

    print_r(array_chunk($array, 4)); // Divide o array em pedaços de 4 elementos cada

    echo "<br>";

    $arrays = array_chunk($array, 10);


    print_r($arrays); // Divide o array em pedaços de 10 elementos cada
    echo "<br>";

    print_r($arrays[1]); // Acessa o primeiro pedaço do array
    echo "<br>";