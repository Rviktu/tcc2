<?php
include_once("conexao.php");
$datas = $_POST['datas'];
$horario = $_POST['horario'];
$comentario = $_POST['comentario'];
$sql = "INSERT INTO servico (datas, horario, comentario,) VALUES ($datas, $horario, $comentario)";
if(mysqli_query($conexao, $sql)){
    echo"";
    
} else{
    echo"";

}
mysqli_close($conexao);
?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agende</title>
    <link rel="stylesheet" type="text/css" href="./css/agendar.css">
    <link rel="shortcut icon" href="./imagens/logo.PNG" type="image/x-icon">
</head>
<body>
    <div class="nav-bar">
    <a href="bemvindo.php">
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
            <input type="date" id="datas" name="datas">
        </div>
        <div class="time-container">
            <label for="time">Escolha um horário:</label>
            <input type="time" id="horario" name="horario">
        </div>
        <div class="comentario">
        <label for="username">Comentario:</label>
                <input type="text" id="comentario" name="comentario" required>
            </div>

            <button type="submit">Agendar</button>
    </div>
</body>
</html>