<?php

$a = 1;
$b = "1";

if( $a !== $b ) {
    echo "$a não é identico a $b 1<br>";
} else {
    echo "$a é identico a $b 2<br>";
}

// se for != 1, então é diferente 
if( $a != $b ) {
    echo "$a não é identico a $b 1<br>";
} else {
    echo "$a é identico a $b 2<br>";
}

if( 3 !== 3 ) {
    echo "3 não é identico a 3 3<br>";
} else {
    echo "3 é identico a 3 4<br>";
}

if( 3 !== "3" ) {
    echo "3 não é identico a '3' 5<br>";
} else {
    echo "3 é identico a '3' 6<br>";
}