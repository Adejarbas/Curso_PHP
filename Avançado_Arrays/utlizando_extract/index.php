<?php

    $arr = ['cor' => 'azul', 'marca' => 'ford', 'ano' => 2020];

    extract($arr); // Extrai as variáveis do array associativo

    echo "$cor <br>";
    echo "$marca <br>";
    echo "$ano <br>";

    $nome = "João";

    $pessoa = [ 'nome' => "Daniel",
                'idade' => 30,];
                
    echo $nome . "<br>";

    extract($pessoa); // Extrai as variáveis do array associativo

    echo "$nome <br>";
    echo "$idade <br>";