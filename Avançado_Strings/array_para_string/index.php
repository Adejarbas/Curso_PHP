<?php

    $str = [
        "Carro",
        "Navio",
        "helicóptero",
        "barco",
        "Jangada"
    ];


    $str1 = implode(", ", $str);

    echo "$str1 <br>";

    $arr2 = ["Aviao", "Trem", "Bicicleta", "Skate", "Patinete"];

    $str2 = implode(", ", $arr2);

    echo "$str2 <br>";