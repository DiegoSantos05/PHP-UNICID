<html>
	<head>
	</head>
	<body>
<h1>Soma de Números Pares ou Ímpares</h1>

<form action="" method="POST">
    <label for="numero">Digite um número:</label>
    <input type="number" id="numero" name="numero" required><br><br>

    <label for="tipo">Escolha o tipo de número para somar:</label>
    <select id="tipo" name="tipo" required>
        <option value="pares">Pares</option>
        <option value="impares">Ímpares</option>
    </select><br><br>

    <input type="submit" value="Calcular Soma">
</form>

<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os valores do formulário
    $numero = intval($_POST['numero']);
    $tipo = $_POST['tipo'];

    // Variável para armazenar a soma
    $soma = 0;

    // Estrutura de repetição para somar números pares ou ímpares
    for ($i = 0; $i <= $numero; $i++) {
        if ($tipo == "pares" && $i % 2 == 0) {
            $soma += $i;
        } elseif ($tipo == "impares" && $i % 2 != 0) {
            $soma += $i;
        }
    }

    // Exibe o resultado
    if ($tipo == "pares") {
        echo "<h2>A soma de todos os números pares de 0 até {$numero} é: {$soma}</h2>";
    } else {
        echo "<h2>A soma de todos os números ímpares de 0 até {$numero} é: {$soma}</h2>";
    }
}
?>
	</body>
</html>