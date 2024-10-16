<?php
session_start();

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Dados de login pré-definidos (usuário 1 e 2)
    $usuarios = [
        ['usuario' => 'usuario1', 'senha' => 'senha123'],
        ['usuario' => 'usuario2', 'senha' => 'senha456']
    ];

    // Obtém os dados do formulário
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    // Variável de controle de login
    $loginValido = false;

    // Verifica se os dados de login correspondem
    foreach ($usuarios as $credenciais) {
        if ($credenciais['usuario'] == $usuario && $credenciais['senha'] == $senha) {
            $loginValido = true;
            break;
        }
    }

    // Se o login for válido, inicia a sessão
    if ($loginValido) {
        $_SESSION['logado'] = true;
        header('Location: menu.php'); // Redireciona para o menu de exercícios
        exit();
    } else {
        $erro = "Usuário ou senha incorretos.";
    }
}
?>


<html>
<head>
</head>
<body>

    <h1>Login</h1>

    <!--  mensagem de erro -->
    <?php if (isset($erro)): ?>
        <p style="color: red;"><?php echo $erro; ?></p>
    <?php endif; ?>

    <!-- Formulário de login -->
    <form action="" method="POST">
        <label for="usuario">Usuário:</label>
        <input type="text" id="usuario" name="usuario" required><br><br>

        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required><br><br>

        <input type="submit" value="Login">
    </form>

</body>
</html>