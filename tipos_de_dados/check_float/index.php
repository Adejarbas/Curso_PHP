<?php

 $a = "teste";
 $b = 12.8;

 if(is_float($a)) {
    echo "$a É um float <br>";
 }

 if(is_float($b)) {
    echo "$b É um float <br>";
 }

if(is_float(123.253)){
    echo "123.253 É um float <br>";
}

if(is_float($b)) {
    echo "$b É um float <br>";
} else {
    echo "$b Não é um float <br>";
}
