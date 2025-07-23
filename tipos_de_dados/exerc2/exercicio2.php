<?php

 echo 123.3333;
 echo "<br>";
 echo -12.5;
 echo "<br>";

 $a = 12.5;
 $b = "teste";
 $c = 123;


 if(is_float($a)) {
    echo "$a É um float <br>";
 } else {
    echo "$a Não é um float <br>";
 }

if(is_float($b)) {
   echo "$b É um float <br>";
} else {
   echo "$b Não é um float <br>";
}

if (is_float($c)){
   echo "$c É um float <br>";
} else {
   echo "$c Não é um float <br>";
}
