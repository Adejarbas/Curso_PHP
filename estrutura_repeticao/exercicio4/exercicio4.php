<?php

    $a = [1, 2, 4, 6, 8, 10, 12, 14, 16, 18, 20];

    $x = count($a);
    $y = 0;

    for( $y = 0; $y < $x; $y++) {

        if($a[$y] % 2 == 0) {
            echo "O valor do índice $y é: " . $a[$y] . "<br>";
        }
        
    }