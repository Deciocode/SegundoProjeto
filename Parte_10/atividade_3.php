<?php

    if(isset($_POST['btnEnviar'])){
        $numero = trim($_POST['numero']);

        if($numero == ''){
            $msgError = '<strong style="color: red;">Preencher todos os campos obrigatórios!</strong>';
        }else{
            for($i=1; $i <= $numero; $i++){
                echo 'Número digita foi ' . $numero . '. Renderização executada: ' . $i . '.<br>';
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
    <title>Atividade 3</title>
</head>
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <form action="atividade_3.php" method="POST">
        <label>Digite um número que informa a quantidade de Repetições desejada:</label>
        <input type="number" name="numero" value="<?= isset($numero) ? $numero : '' ?>">
        <button name="btnEnviar">ENVIAR</button>
    </form>
    <?= isset($msgError) ? $msgError : '' ?>
</body>
</html>