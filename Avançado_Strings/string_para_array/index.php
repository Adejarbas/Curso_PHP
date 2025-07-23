<?php

    $str = "esta string é para um teste de array";

    $fraseArray = explode(" ", $str);

    print_r($fraseArray);

    echo "<br>";
///////////
    // $fraseArray2 explode(", ", $str); //vai dar erro

    //print_r($fraseArray2);
    //echo "<br>";
//////////
    $fraseB = "Carro, Moto, Avião, Navio, Trem";
    $fraseArray3 = explode(", ", $fraseB);

    print_r($fraseArray3);
    echo "<br>";

    for($i = 0; $i < count($fraseArray3); $i++) {
        echo $fraseArray3[$i] . "<br>";
    }