<?php

    // RESGATAR ELEMENTOS DE ARRAY
    // REMOVER ELEMENTOS

    $arr = [1,2,3,4,5,6];

    print_r($arr); // 
    echo "<br>"; 

    $removidos = array_splice($arr, 1,2); // Remove 3 elementos a partir do índice 2


    print_r($removidos); // Imprime os elementos removidos
    echo "<br>";

    $arr2 = [7,8,9,10,11,12];

    print_r($arr2); // 
    echo "<br>"; 

    $removiso2 = array_splice($arr2, 3);

    print_r($removiso2); // Imprime os elementos removidos
    echo "<br>";