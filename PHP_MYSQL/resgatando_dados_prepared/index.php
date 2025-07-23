<?php

    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "curso_php";

    $conn = new mysqli($host, $user, $password, $database);

    // Resgatando todos os dados de uma tabela com prepared statements

    /*$id = 3;

    $stmt = $conn->prepare("SELECT * FROM usuarios WHERE id > ?");

    $stmt->bind_param("i", $id); // i = integer

    $stmt->execute();

    $result = $stmt->get_result();

    $data = $result->fetch_all(MYSQLI_ASSOC);

    print_r($data);*/

    // Restagando apenas um dado específico

    $id = 4;

    $stmt = $conn->prepare("SELECT nome FROM usuarios WHERE id = ?");

    $stmt->bind_param("i", $id); // i = integer

    $stmt->execute();

    $result = $stmt->get_result();

    $usuario = $result->fetch_row();

    print_r($usuario);

    $conn->close();