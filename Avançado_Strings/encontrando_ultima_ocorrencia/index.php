<?php

    $str = "Testando encontrado palavra teste, em uma string que tem teste";

    $palavra = strripos($str, "teste");

    echo "$palavra <br>";

    $palavra2 = strrpos($str, "teste");

    echo  "$palavra2 <br>";

    if(strrpos($str, "Java") === false){
        echo "A palavra não foi encontrada <br>";
    } else {
        echo "A palavra foi encontrada <br>";
    }

    $p = substr($str, strpos($str, "teste"), 5);

    echo $p . "<br>";