<?php

    $a = (int) "12";

    echo $a . "<br>";

    echo $a + 10 . "<br>";

    if( $a == 12 ){
        echo "A variável $a é igual a 12";
    } else {
        echo "A variável $a não é igual a 12";
    }

    echo "<br>";

    $b = (float) "12.554525252";

    if( $b == 12.554525252 ){
        echo "A variável b é igual a 12.554525252";
    } else {
        echo "A variável $b não é igual a 12.554525252";
    }

    echo "<br>";

    $c= (string) "12";

    echo $c . "<br>";

    if( $c === "12" ){
        echo "A variável c é identica a '12'";
    } else {
        echo "A variável c não é identica a '12'";
    }