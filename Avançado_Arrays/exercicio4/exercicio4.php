<?php

    $arr = ['batata', 'maça', 'pera', 'feijão', 'arroz',];

    $removidos = array_splice($arr, 2, 2); // Remove 2 elementos a partir do índice 2

    print_r($arr); // Imprime o array após a remoção
    echo "<br>";

    print_r($removidos); // Imprime os elementos removidos
    echo "<br>";