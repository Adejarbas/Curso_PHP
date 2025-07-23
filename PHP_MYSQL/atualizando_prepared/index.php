<?php

    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "curso_php";

    $conn = new mysqli($host, $user, $password, $database);

    $id = 1;

    $stmt = $conn->prepare("UPDATE usuarios SET nome = ?, idade = ?, profissao = ? WHERE id = ?");
    $nome = "Carlos";
    $idade = 28;
    $profissao = "Feiticeiro";
    $stmt->bind_param("sisi", $nome, $idade, $profissao, $id);

    $stmt->execute();

    if ($stmt->error) {
        echo "ERro: " . $stmt->error;
    }