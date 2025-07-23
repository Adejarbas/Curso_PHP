<?php

    $arr = [
        [1,2,3],
        [4,5,6],
        [7,8,9]
    ];

    print_r($arr);
    echo "<br>";

    echo($arr[0][1] . "<br>"); // Acessa o segundo elemento do primeiro array
    echo($arr[1][2] . "<br>"); // Acessa o terceiro elemento do segundo array

    echo count($arr) . "<br>"; // Conta o número de arrays no array multidimensional
    echo count($arr[0]) . "<br>"; // Conta o número de elementos no