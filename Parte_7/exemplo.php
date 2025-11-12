<?php

    // ltrim: Remove todo espaço em branco inserido na extremidade ESQUERDA do conteúdo de um input.
    // rtrim: Remove todo espaço em branco inserido na extremidade DIREITA do conteúdo de um input.
    // trim:  Remove todo espaço em branco inserido na extremidade ESQUERDA e DIREITA do conteúdo de um input.

    // Variável de Tipo Global.
    $numero_1 = '';
    $numero_2 = '';
    $soma = '';

    if(isset($_POST['btnSomar'])){
        $numero_1 = ltrim(rtrim($_POST['p_valor']));
        $numero_2 = trim($_POST['s_valor']);

        $soma = $numero_1 + $numero_2;
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
    <form action="exemplo.php" method="POST">
        <label>Digite o Primeiro Valor:</label>
        <input type="number" name="p_valor" value="<?= $numero_1 ?>">
        <br>
        <label>Digite o Segundo Valor:</label>
        <input type="number" name="s_valor" value="<?= $numero_2 ?>">
        <br>
        <button name="btnSomar">SOMAR</button>
    </form>
    <span>Resultado Final:</span>
    <input disabled value="<?= $soma ?>">
</body>
</html>