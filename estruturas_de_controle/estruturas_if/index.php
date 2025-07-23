<?php


// Estruturas de controle - if, else, elseif
    // Estrutura verdadeira
    if(5 > 2) {

        echo "Deu certo entrou no if";

    }

    echo "<br>";


    // Condição falsa
    if (2 >= 5) {
        echo "Não vai entrar no if, por que deu false <br>";
    }

    //Utilizar op logicos
    if( 10 === 10 && 9 > 3) {

        echo "Deu certo entrou no if 2 <br>";

    }

    // Varaiveis 

    $a = 30;
    $b = 20;

    $c = "Deu certo entrou no if 3 <br>";

    if($a >= $b) {
        echo $c;

    }