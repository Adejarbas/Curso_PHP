<?php

// Função para calcular desconto
function calcularDesconto($valorProduto, $categoria) {
    // Verificar a categoria e aplicar o desconto
    if($categoria == "eletrônicos") {
        // 10% de desconto para eletrônicos
        $desconto = $valorProduto * 0.10;
    }
    else if($categoria == "vestuário") {
        // 20% de desconto para vestuário
        $desconto = $valorProduto * 0.20;
    }
    else if($categoria == "alimentos") {
        // 5% de desconto para alimentos
        $desconto = $valorProduto * 0.05;
    }
    else {
        // Sem desconto para outras categorias
        $desconto = 0;
    }
    
    // Calcular o valor final
    $valorFinal = $valorProduto - $desconto;
    
    // Retornar o resultado
    return $valorFinal;
}

// Testando a função
$preco = 100;

echo "Preço original: R$ " . $preco . "<br>";
echo "Preço com desconto (eletrônicos): R$ " . calcularDesconto($preco, "eletrônicos") . "<br>";
echo "Preço com desconto (vestuário): R$ " . calcularDesconto($preco, "vestuário") . "<br>";
echo "Preço com desconto (alimentos): R$ " . calcularDesconto($preco, "alimentos") . "<br>";
echo "Preço com desconto (outros): R$ " . calcularDesconto($preco, "outros") . "<br>";

?>