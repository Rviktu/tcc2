<?php
include_once("conexao.php");

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "INSERT INTO cliente (nome, telefone, endereco, email, senha) VALUES ('$nome','$telefone', '$endereco', '$email', '$senha')";

if(mysqli_query($conexao, $sql)) {
    echo "";
}else{
    echo "Algo deu errado" . $sql . "<br>" . mysqli_error($conn);
}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Conta</title>
    <link rel="stylesheet" href="./css/criar.css">
</head>
<body>
<header>
    <div class="nav-bar">
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
