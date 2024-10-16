<html>
	<head>
	</head>
	<body>
<h1>Simulador de Crescimento de Bactérias</h1>

<form action="" method="POST">
    <label for="populacao_inicial">População Inicial:</label>
    <input type="number" id="populacao_inicial" name="populacao_inicial" required><br><br>

    <label for="taxa_crescimento">Taxa de Crescimento (em decimal, ex: 0.2 para 20%):</label>
    <input type="number" step="0.01" id="taxa_crescimento" name="taxa_crescimento" required><br><br>

    <label for="geracoes">Número de Gerações:</label>
    <input type="number" id="geracoes" name="geracoes" required><br><br>

    <input type="submit" value="Simular">
</form>

<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os valores do formulário
    $populacao = intval($_POST['populacao_inicial']);
    $taxa = floatval($_POST['taxa_crescimento']);
    $geracoes = intval($_POST['geracoes']);

    // Inicializa a contagem de gerações
    $contador = 1;

    echo "<h2>Simulação do crescimento da população de bactérias:</h2>";
    echo "<ul>";

    // Enquanto o contador for menor ou igual ao número de gerações, calcula a nova população
    while ($contador <= $geracoes) {
        echo "<li>Geração {$contador}: População = " . number_format($populacao, 0, ',', '.') . "</li>";
        
        // Calcula o crescimento da população
        $populacao += $populacao * $taxa;
        
        // Incrementa o contador de gerações
        $contador++;
    }

    echo "</ul>";
}
?>
</body>
</html>