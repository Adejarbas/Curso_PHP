<?php

    $str = "Carro - Navio - helicóptero - barco - Jangada";

    $arr = explode (" - ", $str);

    for($i = 0; $i < count($arr); $i++) {
        echo "item: $arr[$i]  <br>";
    }