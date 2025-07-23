<?php

    $arr = [
        [1,2,3,4],
        [5,6,7,8],
        [9,10,11,12],
        [13,14,15,16]
    ];

    //Lopp no array externo
    for($i = 0; $i < count($arr); $i++) {
        
        //imprimindo array
        echo "imprimindo array externo: " . ($i + 1) . "<br>";



        //imprimindo array interno
        for($j = 0; $j < count($arr[$i]); $j++) {
            echo $arr[$i][$j] . " ";
        }
        echo "<br>";
    }