<?php

    $str = "Estamos testando o metodos strpos, com o strpos podemos encontrar strings dentro de outras strings, e o strpos é muito legal";

    $testeEncontrar = strpos($str, "strpos");

    echo $testeEncontrar . "<br>";

    $testeEncontrar2 = strpos($str, "java");

    echo $testeEncontrar2 . "<br>";

    if($testeEncontrar === false){
        echo "A string não foi encontrada <br>";
    } else {
        echo "A string foi encontrada na posição: $testeEncontrar <br>";
    }

    $palavra = "legal";

    $testeEncontrar3 = strpos($str, $palavra);

    echo $testeEncontrar3 . "<br>";

    $palavra2 = "to";

    $testeEncontrar4 = strpos($str, $palavra2);

    echo $testeEncontrar4 . "<br>";