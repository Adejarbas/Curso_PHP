<?php


    $a = [2,6,10,"17",23,false,"Arroz",78,"peixe",120,true];

    $x = count($a);
    $y = 0;

    while ($y < $x) {

        if(is_string($a[$y])) {
            echo $a[$y] . "<br>";
        }

        $y ++;
    }