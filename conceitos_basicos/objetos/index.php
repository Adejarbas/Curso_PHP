<?php

 class pessoa {

    function falar() {
        echo "Ola, meu nome é Daniel e tenho 30 anos.";
    }
 }

 $Daniel = new pessoa();

 $Daniel->nome = "Daniel";

 echo  $Daniel->nome . "<br>";
 
 echo "<br>";

 $Daniel->falar();
 