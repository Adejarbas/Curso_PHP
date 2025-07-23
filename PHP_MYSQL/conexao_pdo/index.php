<?php


    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "curso_php";

    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $password);

    // inserir dados

    /*$stmt = $conn->prepare("INSERT INTO usuarios (nome, idade, profissao) VALUES (:nome, :idade, :profissao)");

    $nome = "Fran";
    $idade = 25;
    $profissao = "Engenheira";


    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":idade", $idade);
    $stmt->bindParam(":profissao", $profissao);

    $stmt->execute();*/

    // Atualizar dados

    /*$id = 7;
    $nome = "Franciele";
    $idade = 28;
    $profissao = "Segurança";

    $stmt = $conn->prepare("UPDATE usuarios SET nome = :nome, idade = :idade, profissao = :profissao WHERE id = :id");
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":idade", $idade);
    $stmt->bindParam(":profissao", $profissao);

    $stmt->execute();*/

    // Selecionar dados

    $id = 1;

    $stmt = $conn->prepare("SELECT * FROM usuarios WHERE id = :id");

    $stmt->bindParam(":id", $id);

    $stmt->execute();

    // $data = $stmt->fetch();

    // print_r($data);

    $itens = $stmt->fetchAll(PDO::FETCH_ASSOC);

    print_r($itens);