<?php
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['logado']) || $_SESSION['logado'] !== true) {
    // Se não estiver logado, redireciona para a página de login
    header('Location: index.php');
    exit();
}
?>

<html>
<head>
</head>
<body>

    <h1>Bem-vindo ao Menu de Exercícios</h1>

    <!-- Menu com os links para os exercícios -->
    <ul>
        <li><a href="formdesconto.php">Exercício IF - Desconto em Compras</a></li>
        <li><a href="switch.php">Exercício Switch...Case - Conversor de Temperatura</a></li>
        <li><a href="for.php">Exercício FOR - Soma de Números Pares ou Ímpares</a></li>
        <li><a href="while.php">Exercício WHILE - Crescimento de População de Bactérias</a></li>
    </ul>

    <a href="logout.php">Sair</a>

</body>
</html>