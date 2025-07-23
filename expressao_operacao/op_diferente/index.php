<?php

    $a = 3;
    $b = 4;

    if( $a != $b ) {
        echo "$a é diferente de $b 1<br>";
    } else {
        echo "$a não é diferente de $b 2<br>";
    }

    if( $a != 3 ) {
        echo "$a é diferente de 3 3<br>";
    } else {
        echo "$a não é diferente de 3 4<br>";
    }

    if( false != "teste") {
        echo "false é diferente de 'teste' 5<br>";
    } else {
        echo "false não é diferente de 'teste' 6<br>";
    }