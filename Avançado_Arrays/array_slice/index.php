<?php

    $arr = [2,4,5,6,7,8,10,11,12,13,14,15];

    $slice1 = array_slice($arr, 1, 5); // Pega os primeiros 5 elementos

    print_r($slice1);
    echo "<br>";

    $slice2 = array_slice($arr, 5, 5); // Pega os próximos 5 elementos

    print_r($slice2);
    echo "<br>";

    $slice3 = array_slice($arr, 4); // Pega todos os elementos a partir do índice 4

    print_r($slice3);
    echo "<br>";

    $slice4 = array_slice($arr, 4, -3); // Pega todos os elementos a partir do índice 4, exceto os últimos 3

    print_r($slice4);
    echo "<br>";