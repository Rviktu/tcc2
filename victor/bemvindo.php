
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="shortcut icon" href="./imagens/logo.PNG" type="image/x-icon">
</head>
<body>
    <div class="nav-bar">
        <a href="bemvindo.php">
        <img src="./imagens/logo.PNG" alt="" style="height: 100px;"></a>

            <div class="lado">
                <li><a href="./sobre.php">Sobre nós</a></li>
                <li><a href="./agendar.php">Agendar</a></li>
                <li><a href="./entrar.php">Entrar</a></li>
                <li><a href="./criar.php">Criar conta</a></li>
            </div>

    </div>

    <div class="txt">
        <div class="eletro">
            <h1>ELETRO</h1>
        </div>
        
        <div class="automação">
            <h1>AUTOMAÇÃO</h1>
        </div>
    </div>
    <div class="container">
        <form class="login-form" action="#">
            <h1>LOGIN</h1>
            <div class="form-group">
                <label for="username">Email:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Senha:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Entrar</button>
        
    </div>
        </form>
</body>
</html>
