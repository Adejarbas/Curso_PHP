<?php

// o identico é diferente do de igualdade que trabalha com ==

// no caso o identico verifica se o tipo é o mesmo ===

if( 1 === 1 ) {
    echo "1 é identico a 1 <br>";
} else {
    echo "1 não é identico a 1 <br>";
}

if( 1 === "1" ) {
    echo "1 é identico a '1' <br>";
} else {
    echo "1 não é identico a '1' <br>";
}

if( 1 === 100.11 ) {
    echo "1 é identico a 1.1 <br>";
} else {
    echo "1 não é identico a 100.11 <br>";
}