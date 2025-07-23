<?php

    $str ="está é uma string muito  grande, ela tem varios caracteres e é muito legal";

    for ($i = 0; $i < strlen($str); $i++) {
        echo $str[$i] . "<br>";
    }