<?php

    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "curso_php";

    $conn = new mysqli($host, $user, $password, $database);

    // Para criar uma tabela
    /*$q = "CREATE TABLE teste (
        nome VARCHAR(100) NOT NULL,
        idade INT,
        profissao VARCHAR(100)
    )";*/

    // Para deletar uma tabela

    $q = "DROP TABLE teste";

    $conn->query($q);

    $conn->close();