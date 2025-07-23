<?php


    function VerificarParouImpar($numero) {

        if ($numero % 2 == 0) { 
            echo  "<h1>O número $numero é par</h1>";
        } else {
            echo  "<h1>O número $numero é ímpar</h1>";
        }
    }

    VerificarParouImpar(10);
    VerificarParouImpar(15);
    VerificarParouImpar(7);