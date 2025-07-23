<?php

    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "curso_php";

    $conn = new mysqli($host, $user, $password, $database);

    $nome = "João";
    $idade = 36;
    $profissao = "Lojista";

    $stmt = $conn->prepare("INSERT INTO usuarios (nome, idade, profissao) VALUES (?, ?, ?)");

    $stmt->bind_param("sis", $nome, $idade, $profissao); // s = string, i = integer

    $stmt->execute();