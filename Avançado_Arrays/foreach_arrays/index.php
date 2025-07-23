<?php

    $joao = [
        'nome' => 'João',
        'idade' => 30,
        'profissao' => 'Programador',
        'corDosOlhos' => 'preto'
    ];

    $daniel = [
        'nome' => 'Daniel',
        'idade' => 25,
        'profissao' => 'Designer',
        'corDosOlhos' => 'castanho'
    ];

    foreach($joao as $caracteristica => $valor) {
        echo "$caracteristica -> $valor <br>";
    }

    foreach ($daniel as $caracteristica => $valor) {
        echo "$caracteristica -> $valor <br>";
    }