<?php

function verificarCategoria($categoria) {
    switch($categoria) {
        case "eletrônicos":
            return "Essa categoria é de produtos eletrônicos";
        case "vestuário":
            return "Essa categoria é de produtos de vestuário";
        case "alimentos":
            return "Essa categoria é de produtos alimentícios";
        default:
            return "Categoria desconhecida";
    }
}

// Teste da função
echo "Categoria: eletrônicos - " . verificarCategoria("eletrônicos") . "<br>";
echo "Categoria: vestuário - " . verificarCategoria("vestuário") . "<br>";
echo "Categoria: alimentos - " . verificarCategoria("alimentos") . "<br>";
echo "Categoria: móveis - " . verificarCategoria("móveis") . "<br>";

?>