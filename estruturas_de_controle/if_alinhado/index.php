<?php

    if(10 > 2){
        echo "Entrou no primeiro if <br>";

        if("teste" == "teste"){
            echo "Entrou no segundo if <br>";
        } 
    }

    $escopo = 10;

    if(10 > 2){
        echo "Entrou no primeiro if 2<br>";

        if("teste" == "teste"){
            echo "Entrou no segundo if 2<br>";

            echo $escopo . "<br>";
        } else {
            echo "Entrou no else do segundo if 2<br>";
        }

    } else {
        echo "Entrou no else do primeiro if 2<br>";
    }