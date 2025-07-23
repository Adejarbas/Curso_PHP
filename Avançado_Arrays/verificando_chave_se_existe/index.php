<?php


    $arr = [ 'nome' => 'João', 'idade' => 30, 'profissao' => 'Programador' ];

    if(array_key_exists('nome', $arr)) {
        echo "A chave 'nome' existe no array.<br>";
    } else {
        echo "A chave 'nome' não existe no array.<br>";
    }

    //

    if(array_key_exists('pedra', $arr)) {
        echo "A chave 'pedra' existe no array.<br>";
    } else {
        echo "A chave 'pedra' não existe no array.<br>";
    }

    //

    if(isset($arr['nome'])) {
        echo "A chave 'nome' está definida no array ISSET.<br>";
    } else {
        echo "A chave 'nome' não está definida no array ISSET.<br>";
    }

    if(isset($arr['TESTE'])) {
        echo "A chave 'TESTE' está definida no array ISSET.<br>";
    } else {
        echo "A chave 'TESTE' não está definida no array ISSET.<br>";
    }

    if(isset($s)) {
        echo "A chave 's' está definida no array ISSET.<br>";
    } else {
        echo "A chave 's' não está definida no array ISSET.<br>";
    }