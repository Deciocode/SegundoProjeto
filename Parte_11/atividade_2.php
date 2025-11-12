<?php

    require_once 'engine.php';

    if(isset($_POST['btnEnviar'])){
        $salario = trim($_POST['salario']);
        $aumento = trim($_POST['aumento']);

        if(SomarSalario($salario, $aumento) == 0){
            $msg = '<strong style="color: red;">Preencher todos os campos obrigatórios!</strong>';
        }else{
            $retorno = SomarSalario($salario, $aumento);
        }
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 2</title>
</head>
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <form action="atividade_2.php" method="POST">
        <label>Digite um Salário:</label>
        <input type="text" name="salario" value="<?= isset($salario) ? $salario : '' ?>">
        <br>
        <label>Digite um Aumento:</label>
        <input type="text" name="aumento" value="<?= isset($aumento) ? $aumento : '' ?>">
        <br>
        <button name="btnEnviar">Enviar</button>
    </form>
    <?= isset($msg) ? $msg : '' ?>
    <?php if(isset($retorno) && $retorno != ''){ ?>
        <br>
        <span>Resultado Final:</span>
        <input disabled value="R$ <?= isset($retorno) ? number_format($retorno, 2, ',', '.') : '' ?>">
    <?php } ?>
</body>
</html>