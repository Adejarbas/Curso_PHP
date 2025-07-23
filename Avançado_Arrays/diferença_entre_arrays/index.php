<?php

    $arr = [1, 2, 3, 4, 5];
    $arr2 = [4, 5, 6, 7, 8];

    $diff = array_diff($arr, $arr2);

    print_r($diff);
    echo "<br>";

    $diff2 = array_diff($arr2, $arr);
    
    print_r($diff2);
    echo "<br>";

