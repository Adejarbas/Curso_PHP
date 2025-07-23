<?php


// Função mktime() - cria um timestamp a partir de uma data e hora específica

    $dataNascimento = mktime(02, 12, 33, 02, 06, 1995);

    echo $dataNascimento . "<br>";

    $dataNascumentoFormatada = date("d/m/Y", $dataNascimento);

    echo $dataNascumentoFormatada . "<br>";

    $dataEspecifica = mktime(15, 30, 00, 12, 25, 2023);

    $dataEspecificaFormatada2 = date("d/m/Y H:i:s", $dataEspecifica);

    echo $dataEspecificaFormatada2 . "<br>";