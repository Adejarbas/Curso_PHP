<?php

    setcookie("nome", "Daniel", time() + 3600, "/");

    if(isset($_COOKIE['nome'])) {
        $nome = $_COOKIE['nome'];
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Olá Mundo!</h1>
    <?php if($nome != ""): ?>
        <h2>O seu nome é <?= $nome ?></h2>
    <?php endif; ?>    
</body>
</html>