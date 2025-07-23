<?php

    $marca = "Ford";
    $modelo = "Mustang";
    $ano = 2020;
    $tetoSolar = true;


    $carro = compact("marca", "modelo", 'ano', 'tetoSolar');

    print_r($carro);
    echo "<br>";