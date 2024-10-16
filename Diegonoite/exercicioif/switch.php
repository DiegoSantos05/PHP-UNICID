<html>
	<head>
	</head>
	<body>
<h1>Conversor de Temperatura</h1>

<form action="" method="POST">
    <label for="temperatura">Temperatura:</label>
    <input type="number" id="temperatura" name="temperatura" step="0.01" required><br><br>

    <label for="unidade">Converter de:</label>
    <select id="unidade" name="unidade" required>
        <option value="celsius">Celsius para Fahrenheit</option>
        <option value="fahrenheit">Fahrenheit para Celsius</option>
    </select><br><br>

    <input type="submit" value="Converter">
</form>

<?php
// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os valores do formulário
    $temperatura = floatval($_POST['temperatura']);
    $unidade = $_POST['unidade'];

    // Variável para armazenar o resultado
    $resultado = 0;

    // Função para converter a temperatura com base na unidade
    switch ($unidade) {
        case 'celsius':
            // Converte de Celsius para Fahrenheit
            $resultado = ($temperatura * 9/5) + 32;
            echo "<h2>{$temperatura} °C equivale a " . number_format($resultado, 2, ',', '.') . " °F</h2>";
            break;

        case 'fahrenheit':
            // Converte de Fahrenheit para Celsius
            $resultado = ($temperatura - 32) * 5/9;
            echo "<h2>{$temperatura} °F equivale a " . number_format($resultado, 2, ',', '.') . " °C</h2>";
            break;

        default:
            echo "<h2>Unidade inválida</h2>";
            break;
    }
}
?>
	</body>
</html>