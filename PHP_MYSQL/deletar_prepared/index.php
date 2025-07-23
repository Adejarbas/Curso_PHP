<?php

    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "curso_php";

    $conn = new mysqli($host, $user, $password, $database);

    $nome = "João";

    $stmt = $conn->prepare("DELETE FROM usuarios WHERE nome = ?");
    $stmt->bind_param("s", $nome);

    $stmt->execute();

    $conn->close();