<?php


    function teste($a = "teste") {

        echo "O valor de A é: $a <br>";

    }

    teste(); // Chama a função sem passar o parâmetro, usa o valor padrão
    teste("Outro valor"); // Chama a função passando um valor diferente


    function testando($b, $a = "x") {

        echo "o valor de a é: $a e de b é: $b <br>";


    }

    testando("1"); // Chama a função passando apenas o parâmetro obrigatório
    testando("2", "3"); // Chama a função passando ambos os parâmetros