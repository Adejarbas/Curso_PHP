<?php


    $pessoas = [
        'João' => ['idade' => 30, 'profissao' => 'Diretor'],
        'Maria' => ['idade' => 25, 'profissao' => 'Designer'],
        'Pedro' => ['idade' => 28, 'profissao' => 'Engenheiro'],
    ];

    ?>

    <table border ="1">
        <tr>
            <th>Nome</th>
            <th>Idade</th>
            <th>Profissão</th>
        </tr>
        <?php foreach ($pessoas as $nome => $dados): ?>
            <tr>
                <td><?= $nome ?></td>
                <td><?= $dados['idade'] ?></td>
                <td><?= $dados['profissao'] ?></td>
            </tr>
        <?php endforeach; ?>    
    </table>