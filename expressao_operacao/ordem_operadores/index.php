<?php

    echo 3 + 2 * 5; // 13
    echo "<br>";

    echo (3 + 2) * 5; // 25
    echo "<br>";

    echo 5 + 2 / 10;
    echo "<br>";

    $a = 5;
    $b = 2;
    $c = 10;

    echo $a + $b / $c; // 5.2
    echo "<br>";

    echo $c + $b / $a; // 10.4
    echo "<br>";

    $d = $a * $b * $c; // 100
    echo $d; // 100
    $e  = ($a + $b) * $d; // 700
    echo "<br>";

    echo $e; // 700