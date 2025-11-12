<?php

    if(isset($_POST['btnEnviar'])){
        $nome = trim($_POST['nome']);
        $sobre = trim($_POST['sobre']);
        $idade = trim($_POST['idade']);
        $numero = trim($_POST['numero']);

        if($nome == '' || $sobre == '' || $idade == '' || $numero == ''){
            $msgError = '<strong style="color: red;">Preencher todos os campos obrigatórios!</strong>';
        }else{
            for($i=1; $i <= $numero; $i++){
                echo 
                    'Nome digitado: <b>' . $nome . ' ' . $sobre . 
                    '</b>. Idade: <b>' . $idade . 
                    '</b>. Número digitado: <b>' . $numero . 
                    '</b>. Posição do FOR: <b>' . $i . 
                    '</b>.<br>';
            }
            echo '<hr>';
        }
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 1</title>
</head>
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <form action="atividade_1.php" method="POST">
        <label>Digite seu Nome:</label>
        <input type="text" name="nome" value="<?= isset($nome) ? $nome : '' ?>">
        <br>
        <label>Digite seu Sobrenome:</label>
        <input type="text" name="sobre" value="<?= isset($sobre) ? $sobre : '' ?>">
        <br>
        <label>Digite sua Idade:</label>
        <input type="text" name="idade" value="<?= isset($idade) ? $idade : '' ?>">
        <br>
        <label>Digite um Número:</label>
        <input type="text" name="numero" value="<?= isset($numero) ? $numero : '' ?>">
        <br>
        <button name="btnEnviar">ENVIAR</button>
    </form>
    <?= isset($msgError) ? $msgError : '' ?>
</body>
</html>