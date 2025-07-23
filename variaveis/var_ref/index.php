<?php

    $x = 10; // int

    $y =& $x; // reference para $x

    echo "$x <br>"; // 10
    echo "$y <br>"; // 10

    $y = 20; // modifica $x

    echo "$x  2 <br>"; // 20
    echo "$y 2 <br>"; // 20


    $nome1 = "João";
    $nome2 = &$nome1; // referência para $nome1

    echo "$nome1 <br>"; // João
    echo "$nome2 <br>"; // João

    $nome2 = "Maria"; // modifica $nome1

    echo "$nome1 2 <br>"; // Maria
    echo "$nome2 2 <br>"; // Maria