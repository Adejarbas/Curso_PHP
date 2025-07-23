<?php

function verificarAcesso($idade, $autorizacao) {
    if ($idade >= 18 && $autorizacao === true) {
        return "Acesso autorizado";
    } elseif ($idade < 18) {
        return "Acesso negado. Idade mínima requerida: 18 anos";
    } elseif ($idade >= 18 && $autorizacao === false) {
        return "Acesso negado. Autorização necessária";
    }
}

// Exemplos de uso
echo verificarAcesso(10, true) . "<br>";
echo verificarAcesso(18, true) . "<br>";
echo verificarAcesso(25, true) . "<br>";
echo verificarAcesso(20, false) . "<br>";

?>