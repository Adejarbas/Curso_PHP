<?php



 if(is_int(5)) { // true
    echo "É um inteiro <br>";
 }

 if(is_int(15)) { // false
    echo "É um inteiro <BR>"; }
    else {
        echo "Não é um inteiro <br>";
}



$a = 10;

if(is_int($a)) { // true
    echo "É um inteiro <br>";    
}

 if(is_int("N")) { // false
    echo "É um inteiro <BR>"; }
    else {
        echo "Não é um inteiro <br>";
}