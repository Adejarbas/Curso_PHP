<?php

    function Soma($num1, $num2) {

        return $num1 + $num2;

    }

    echo Soma(10, 20) . "<br>";
    $x = soma(5, 15);

    echo $x . "<br>";

    $y = Soma($x, 30);

    echo $y . "<br>";


    function TesteRetorno() {

        return "Testando";

    }

    $z = TesteRetorno();

    echo $z . "<br>";