<?php

    function VelocidadeMaxima($vel) {

        echo "<h1>A velocidade máxima é $vel km/h</h1>";

    }

    VelocidadeMaxima(120);

    $velocidade = 80;

    VelocidadeMaxima($velocidade);


    function descreverAnimal($nome, $raca) {

        echo "O $nome é da raça $raca.<br>";

    }

    descreverAnimal("Rex", "Labrador");
    descreverAnimal("Mia", "Siamês");