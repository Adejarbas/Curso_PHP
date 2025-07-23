<?php

    $carro = [
        'marca' => 'Ford',
        'modelo' => 'Mustang',
        'ano' => 2020,
        'cor' => 'vermelho',
        'teto-solar' => true,
        'motor' => '2.4'
    ];

    $chaves = array_keys($carro); // Obtém as chaves do array

    print_r($chaves);
    echo "<br>";

    $valores = array_values($carro); // Obtém os valores do array
    print_r($valores);
    echo "<br>";