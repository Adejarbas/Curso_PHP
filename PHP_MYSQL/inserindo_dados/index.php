<?php

    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "curso_php";

    $conn = new mysqli($host, $user, $password, $database);


    // Inserir dados na tabela

    //pode colocar variaveis tambem
    $table = "usuarios";
    $nome = "João";
    $idade = 30;
    $profissao = "Desenvolvedor";

    $q2 = "INSERT INTO usuarios (nome, idade, profissao) VALUES ('Daniel', 30, 'Estagionário')";  
    $q = "INSERT INTO $table (nome, idade, profissao) VALUES ('$nome', $idade, '$profissao')";  

    $conn->query($q);
    $conn->query($q2);

    $conn->close();