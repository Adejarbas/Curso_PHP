<?php

    $a = 10;
    $b = 20;
    $c = 30;


    $d = $a + $b * $c; // 610

    $e = ($d + $d) * $d; // 3721000

    echo ($c - $a) / $b; // 1
    echo "<br>";

    echo $d * $a;

    echo "<br>";

    echo $e / $d; // 6100

    $operacao = ($a + $b) * $c - $d / $e; // 6100
    echo "<br>";
    echo $operacao; // 6100