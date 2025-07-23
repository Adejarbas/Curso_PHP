<?php

    function soma($a, $b, $c) {

        print_r(func_get_args()); // Exibe os argumentos passados para a função

        echo "<br>";

        echo func_num_args() . "<br>";

        return $a + $b + $c; // Retorna a soma dos três argumentos

    }

    soma(2, 4, 2); // Chama a função com dois argumentos