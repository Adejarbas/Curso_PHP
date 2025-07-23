<?php

    $ranking = [
        "matheus" => 100,
        "joao" => 200,
        "maria" => 300,
        "pedro" => 400,
        "ana" => 500
    ];

    asort($ranking); // Ordena o array em ordem crescente de valores

    ?>

    <h1>Ranking</h1>
    <ol>
        <?php foreach ($ranking as $nome => $pontos): ?>
            <li><?= $nome ?>: <?= $pontos ?> pontos</li>
        <?php endforeach; ?>
    </ol>