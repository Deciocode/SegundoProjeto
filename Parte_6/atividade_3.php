<?php

    if(isset($_POST['btnEnviar'])){
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $ass = $_POST['ass'];
        $email = $_POST['email'];
        $descricao = $_POST['descricao'];

        echo 'Nome do Usuário: ' . $nome . ' ' . $sobrenome . '.<br>Assunto: ' . $ass . '.<br>E-mai: ' . $email . '.<br>Mensagem: ' . $descricao . '.<hr>';
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 3</title>
</head>
<body style="font-family:  'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <form action="atividade_3.php" method="POST">
        <label>Digite seu Nome:</label>
        <input type="text" name="nome">
        <br>
        <label>Digite seu Sobrenome:</label>
        <input type="text" name="sobrenome">
        <br>
        <label>Digite o Assunto:</label>
        <input type="text" name="ass">
        <br>
        <label>Digite o E-mail:</label>
        <input type="email" name="email">
        <br>
        <label>Digite sua Mensagem:</label>
        <br>
        <textarea name="descricao" rows="4" style="width: 300px;"></textarea>
        <br>
        <button name="btnEnviar">ENVIAR</button>
    </form>
</body>
</html>