<?php

    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "curso_php";

    $conn = new mysqli($host, $user, $password, $database);


    if($conn->connect_errno) {
        echo "Falha na conexão <br>";
        echo "Erro: " . $conn->connect_error;
    }


    // Executar uma consulta
    $sql = "SELECT * FROM usuarios";

    $result = $conn->query($sql);

    print_r($result);

    $conn->close();