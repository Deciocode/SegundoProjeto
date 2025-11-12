<?php

    require_once 'engine.php';

    if(isset($_POST['btnSomar'])){
        $valor_1 = trim($_POST['vl1']);
        $valor_2 = trim($_POST['vl2']);

        if(ExemploSomar($valor_1, $valor_2) == 0){
            echo 'Preencher todos os campos obrigatórios!';
        }else{
            $resultado = ExemploSomar($valor_1, $valor_2);
        }
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo</title>
</head>
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <h2>Somar.</h2>
    <hr>
    <form action="exemplo.php" method="POST">
        <label>Digite o Primeiro Número:</label>
        <input type="text" name="vl1" value="<?= isset($valor_1) ? $valor_1 : '' ?>">
        <span> [ + ]</span>
        <label>Digite o Segundo Número:</label>
        <input type="text" name="vl2" value="<?= isset($valor_2) ? $valor_2 : '' ?>">
        <button name="btnSomar">SOMAR</button>
    </form>
    <hr>
    <?php if(isset($resultado) && $resultado != ''): ?>
        <span>Resultado Final:</span>
        <input disabled value="<?= isset($resultado) ? $resultado : '' ?>">
    <?php endif; ?>
</body>
</html>