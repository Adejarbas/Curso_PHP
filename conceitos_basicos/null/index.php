<?php

    echo NULL;

    $nome = NULL;

    if(is_null($nome)){
        echo "O nome é nulo";
    }

    echo "<br>";

    $nome = "Daniel";

     if(is_null($nome)){
        echo "O nome é nulo";
    } else {
        echo "O nome $nome não é nulo";
    }