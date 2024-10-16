<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Desconto em Compras</title>
</head>
<body>
<h1>Calcular Desconto em Compras</h1>

<!-- Formulário de entrada -->
<form action="" method="POST">
    <label for="valorCompra">Valor da Compra (R$):</label>
    <input type="number" id="valorCompra" name="valorCompra" step="0.01" required><br><br>

    <label for="cupom">Cupom de Desconto:</label>
    <input type="text" id="cupom" name="cupom" required><br><br>

    <input type="submit" value="Calcular Desconto">
</form>

<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os valores do formulário
    $valorCompra = floatval($_POST['valorCompra']);
    $cupom = $_POST['cupom'];

    // Função para calcular o desconto
    function calcularDesconto($valorCompra, $cupom) {
        // Converte o cupom para maiúsculas
        $cupom = strtoupper($cupom);

        // Verifica se o valor da compra e o cupom correspondem aos critérios de desconto
        if ($valorCompra > 200 && $cupom === "COMPREIMUITO") {
            $desconto = 0.15; // 15% de desconto
        } elseif ($valorCompra > 100 && $cupom === "QUERO10") {
            $desconto = 0.10; // 10% de desconto
        } else {
            $desconto = 0; // Sem desconto
        }

        // Calcula o valor final com o desconto aplicado
        $valorFinal = $valorCompra - ($valorCompra * $desconto);

        // Retorna o valor final
        return $valorFinal;
    }

    // Chama a função e armazena o resultado
    $valorFinal = calcularDesconto($valorCompra, $cupom);

    // Exibe o valor final
    echo "<h2>Valor Final: R$ " . number_format($valorFinal, 2, ',', '.') . "</h2>";
}
?>
</body>
</html>
