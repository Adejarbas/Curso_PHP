<?php


    $velocidade1 = 120;
    $velocidade2 = 30;
    $velocidade3 = 40;

    $velocidadeMaxima = 40;

    if($velocidade1 < $velocidadeMaxima) {
        
        echo "A velocidade $velocidade1 está abaixo da velocidade máxima de $velocidadeMaxima km/h, parabens <br>";

    } else if($velocidade1 == $velocidadeMaxima) {
        
        echo "A velocidade $velocidade1 é igual a velocidade máxima de $velocidadeMaxima Km/h, cuidado <br>";

    } else {

        echo "A velocidade $velocidade1 está acima da velocidade máxima de $velocidadeMaxima Km/h, você foi multado. <br>";
    }


    if($velocidade2 < $velocidadeMaxima) {
        
        echo "A velocidade $velocidade2 está abaixo da velocidade máxima de $velocidadeMaxima km/h, parabens <br>";

    } else if($velocidade2 == $velocidadeMaxima) {
        
        echo "A velocidade $velocidade2 é igual a velocidade máxima de $velocidadeMaxima Km/h, cuidado <br>";

    } else {

        echo "A velocidade $velocidade2 está acima da velocidade máxima de $velocidadeMaxima Km/h, você foi multado. <br>";
    }


    if($velocidade3 < $velocidadeMaxima) {
        
        echo "A velocidade $velocidade3 está abaixo da velocidade máxima de $velocidadeMaxima km/h, parabens <br>";

    } else if($velocidade3 == $velocidadeMaxima) {
        
        echo "A velocidade $velocidade3 é igual a velocidade máxima de $velocidadeMaxima Km/h, cuidado <br>";

    } else {

        echo "A velocidade $velocidade3 está acima da velocidade máxima de $velocidadeMaxima Km/h, você foi multado. <br>";
    }