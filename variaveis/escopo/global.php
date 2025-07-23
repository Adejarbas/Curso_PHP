<?php

 $teste = "teste";

 echo "$teste global 1 <br>";

 if(5 > 2) {

    $teste = "teste2";
    echo "$teste dentro do if <br>";

 }

 echo "$teste global 2 <br>";


 function testandoGlobal() {

    global $teste; // acessa a variavel global $teste

    $teste = 2;

    echo "$teste global função <br>";

 }

 testandoGlobal();

 echo "$teste global 3 <br>";