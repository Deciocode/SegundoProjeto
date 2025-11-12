<?php

    require_once 'engine.php';

    if(isset($_POST['btnEnviar'])){
        $pessoa = trim($_POST['nome']);
        $info = trim($_POST['info']);
        $senha = trim($_POST['senha']);
        $repSenha = trim($_POST['repSenha']);

        if(ValidarNome($pessoa) == -1){
            $msg = '<strong style="color: red;">O NOME deve conter no mínimo 3 caracteres!</strong>';
        }else if(ValidarDescricao($info) == -2){
            $msg = '<strong style="color: red;">A DESCRIÇÃO deve conter no mínimo 50 caracteres!</strong>';
        }else if(ValidarSenha($senha) == -3){
            $msg = '<strong style="color: red;">A SENHA deve conter entre 6 e 8 caracteres!</strong>';
        }else if(CompararSenhas($senha, $repSenha) == -4){
            $msg = '<strong style="color: red;">AS SENHAS devem ser iguais!</strong>';
        }else{
            $msg = '<strong style="color: green;">Mensagem enviada com sucesso!</strong>';
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
        <input type="text" name="nome" value="<?= isset($pessoa) ? $pessoa : '' ?>">
        <br>
        <label>Digite sua Descrição:</label>
        <input type="text" name="info" value="<?= isset($info) ? $info : '' ?>">
        <br>
        <label>Digite uma Senha:</label>
        <input type="password" name="senha" value="<?= isset($senha) ? $senha : '' ?>">
        <br>
        <label>Digite novamente sua Senha:</label>
        <input type="password" name="repSenha" value="<?= isset($repSenha) ? $repSenha : '' ?>">
        <br>
        <button name="btnEnviar">Enviar</button>
    </form>
    <?= isset($msg) ? $msg : '' ?>
</body>
</html>