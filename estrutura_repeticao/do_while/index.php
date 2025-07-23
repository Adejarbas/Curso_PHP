<?php

    $j = 0;

    $teste = "Daniel";

    do {

        echo "Testando o do while $j <br>";

        if($j == 2 ) {
            echo "$teste chegou no 2, saindo do loop!<br>";
        }

        $j++;
    } while ($j < 10);


    $i = 10;

    do {

        echo "Testando o do while 2 $i <br>";


        if($i== 5 ) {
            echo "$teste chegou no 2, saindo do loop!<br>";
        }

        $i--;

    } while ($i > 0);