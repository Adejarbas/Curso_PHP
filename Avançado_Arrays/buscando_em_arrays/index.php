<?php

    $arr = ['banana', 'maçã', 'laranja'];

    if(in_array('maçã', $arr)) {
        echo "A maçã está no array.<br>";
    } else {
        echo "A maçã não está no array.<br>";
    }

    if(in_array('uva', $arr)) {
        echo "A uva está no array.<br>";
    } else {
        echo "A uva não está no array.<br>";
    }

    $bananan = "banana";

    if(in_array($bananan, $arr)) {
        echo "A banana está no array.<br>";
    } else {
        echo "A banana não está no array.<br>";
    }