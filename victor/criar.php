<?php
include_once("conexao.php");

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtém e sanitiza os dados do formulário
    $nome = filter_var($_POST['nome'], FILTER_SANITIZE_STRING);
    $telefone = filter_var($_POST['telefone'], FILTER_SANITIZE_STRING);
    $endereco = filter_var($_POST['endereco'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $senha = $_POST['senha']; // Considerando que a senha será hashada antes de salvar

    // Prepara a consulta SQL
    $stmt = $conexao->prepare("INSERT INTO cliente (nome, telefone, endereco, email, senha) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $nome, $telefone, $endereco, $email, $senha);

    // Executa a consulta e verifica se foi bem-sucedida
    if ($stmt->execute()) {
        // Redireciona para a página de sucesso ou login
        header("Location: agendar.php"); // Substitua "sucesso.php" pela URL desejada
        exit(); // Certifica-se de que o script não continua executando após o redirecionamento
    } else {
        echo "Algo deu errado: " . $stmt->error;
    }

    // Fecha a declaração e a conexão
    $stmt->close();
    $conexao->close();
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Conta</title>
    <link rel="stylesheet" href="./css/criar.css">
    <link rel="shortcut icon" href="./imagens/logo.PNG" type="image/x-icon">
</head>
<body>
<header>
    <div class="nav-bar">
    <a href="bemvindo.php">
        <img src="./imagens/logo.PNG" alt="Logo" style="height: 100px;">
        <div class="lado">
            <li><a href="./sobre.php">Sobre nós</a></li>
            <li><a href="./agendar.php">Agendar</a></li>
            <li><a href="./entrar.php">Entrar</a></li>
            <li><a href="./criar.php">Criar conta</a></li>
        </div>
    </div>
</header>
<section>
    <div class="txt">
        <div class="eletro">
            <h1>ELETRO</h1>
        </div>
        <div class="automação">
            <h1>AUTOMAÇÃO</h1>
        </div>
    </div>
    <div class="container">
        <form class="login-form" action="criar.php" method="post">
            <h1>CRIAR CONTA</h1>
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" required>
            </div>
            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="text" name="telefone" id="telefone" required>
            </div>
            <div class="form-group">
                <label for="endereco">Endereço:</label>
                <input type="text" name="endereco" id="endereco" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div class="form-group">
                <label for="senha">Senha:</label>
                <input type="password" name="senha" id="senha" required>
            </div>
            <button type="submit">Criar</button>
        </form>
    </div>
</section>
</body>
</html>
