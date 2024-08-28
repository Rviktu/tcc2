<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agende</title>
    <link rel="stylesheet" type="text/css" href="./css/agendar.css">
</head>
<body>
    <div class="nav-bar">
        <img src="./imagens/logo.PNG" alt="" style="height: 100px;">

            <div class="lado">
                <li><a href="./sobre.php">Sobre nós</a></li>
                <li><a href="./agendar.php">Agendar</a></li>
                <li><a href="./entrar.php">Entrar</a></li>
                <li><a href="./criar.php">Criar conta</a></li>
            </div>
    </div>
    <div class="container">
        <h1>Agende seu Horário</h1>
        <div class="calendar-container">
            <label for="calendar">Escolha uma data:</label>
            <input type="date" id="calendar" name="calendar">
        </div>
        <div class="time-container">
            <label for="time">Escolha um horário:</label>
            <input type="time" id="time" name="time">
        </div>
        <button class="schedule-btn">Agendar</button>
    </div>
</body>
</html>