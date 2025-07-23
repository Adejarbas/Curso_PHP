<?php

    if ( 5 > 2 || 3 < 4 ) { // true ou true
        echo  "A operação é verdadeiro 1";
    };

    echo "<br>";

    if(5 > 2 || 30 < 4 ) { // true ou false
        echo "A operação é verdadeiro 2";
    } 

    echo "<br>";

    if(5 > 20 || 3 < 4) { // false ou true
        echo "A operação é verdadeiro 3 ";
    }

    echo "<br>";

     if(5 > 20 || 30 < 4) { // false ou false
        echo "A operação é verdadeiro 4";
    } else {
        echo "A operação é falso 4";
    }

    echo "<br>";

     if((5 > 20 || 3 < 4) && 30 < 40) { // false ou true
        echo "A operação é verdadeiro 5 " ; }
        else {
        echo "A operação é falso 5" ;}

    echo "<br>";

     if((5 > 20 && 3 > 4) || 30 < 40) { // false ou true
        echo "A operação é verdadeiro 6 " ; }
        else {
        echo "A operação é falso 6" ;}