<?php

    $arr = [
        'Daniel' => 30,
        'João' => 25,
        'Maria' => 28,
    ];

    asort($arr); // Ordena o array associativo por chave

    print_r($arr);
    echo "<br>";

    $arr2 = [
        'Daniel' => 30,
        'João' => 25,
        'Maria' => 28,
    ];


    arsort($arr2); // Ordena o array associativo por valor

    print_r($arr2);
    echo "<br>";