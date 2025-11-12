<?php

    require_once 'ClassDAO.php';

    if(isset($_POST['btnSomar'])){
        $primeiroNumero = trim($_POST['primeiroNumero']);
        $segundoNumero = trim($_POST['segundoNumero']);

        $objDAO = new ClassDAO();
        $resultado = $objDAO->SomarExemplo($primeiroNumero, $segundoNumero);

        if($resultado == 0){
            $msgError = '<strong style="color: red;">Preencher todos os campos obrigatórios!</strong>';
        }
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo - POO</title>
</head>
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <form action="exemplo.php" method="POST">
        <label>Digite o Primeiro Número:</label>
        <input type="text" name="primeiroNumero" value="<?= isset($primeiroNumero) ? $primeiroNumero : '' ?>">
        <br>
        <label>Digite o Segundo Número:</label>
        <input type="text" name="segundoNumero" value="<?= isset($segundoNumero) ? $segundoNumero : '' ?>">
        <br>
        <button name="btnSomar">SOMAR</button>
    </form>
    <?= isset($msgError) ? $msgError : '' ?>
    <?php if(isset($resultado) && $resultado != '' && $resultado != 0){ ?>
        <span>Resultado Final:</span>
        <input disabled value="<?= isset($resultado) ? $resultado : '' ?>">
    <?php } ?>
</body>
</html>