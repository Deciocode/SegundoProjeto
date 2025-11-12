<?php

    if(isset($_POST['btnEnviar'])){
        $nomeEmpresa = $_POST['nomeEmpresa'];
        $site = $_POST['site'];
        $facebook = $_POST['facebook'];
        $instagram = $_POST['instagram'];
        $descricao = $_POST['descricao'];

        echo 'Nome da Empresa: ' . $nomeEmpresa . '.<br>Site: ' . $site . '.<br>Facebook: ' . $facebook . '.<br>Instagram: ' . $instagram . '.<br>Descrição: ' . $descricao . '.<hr>';
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 2</title>
</head>
<body style="font-family:  'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <form action="atividade_2.php" method="POST">
        <label>Digite o Nome da Empresa:</label>
        <input type="text" name="nomeEmpresa">
        <br>
        <label>Digite o Site:</label>
        <input type="url" name="site">
        <br>
        <label>Digite o Facebook:</label>
        <input type="url" name="facebook">
        <br>
        <label>Digite o Instagram:</label>
        <input type="url" name="instagram">
        <br>
        <label>Digite uma Descrição:</label>
        <input type="text" name="descricao">
        <br>
        <button name="btnEnviar">ENVIAR</button>
    </form>
</body>
</html>