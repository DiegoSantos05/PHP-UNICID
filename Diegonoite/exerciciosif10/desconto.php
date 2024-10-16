<?php

function calcularDesconto($valorCompra, $cupom) {
    // Converte o cupom para maiúsculas
    $cupom = strtoupper($cupom);

    // Verifica se o valor da compra e o cupom correspondem aos critérios de desconto
    if ($valorCompra > 100 && $cupom === "QUERO10") {
        $desconto = 0.10; // 10% de desconto
    } elseif ($valorCompra > 200 && $cupom === "COMPREIMUITO") {
        $desconto = 0.15; // 15% de desconto
    } else {
        $desconto = 0; // Sem desconto
    }

    // Calcula o valor final com o desconto aplicado
    $valorFinal = $valorCompra - ($valorCompra * $desconto);

    // Retorna o valor final
    return $valorFinal;
}

// Testando a função
$valorCompra = 250;
$cupom = "compreimuito";

$valorFinal = calcularDesconto($valorCompra, $cupom);

echo "Valor final da compra: R$ " . number_format($valorFinal, 2, ',', '.');

?>