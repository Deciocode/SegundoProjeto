<?php

    require_once './engine.php';

    if(isset($_POST['btnEnviar'])){
        $nomeProduto = trim($_POST['produto']);
        $valorUni = trim($_POST['valorUni']);
        $quantidade = trim($_POST['quantidade']);

        if(CalcularValorProduto($nomeProduto, $valorUni, $quantidade) == 0){
            $msgError = '<strong style="color: red;">Preencher todos os campos obrigatórios!</strong>';
        }else{
            $resultado = CalcularValorProduto($nomeProduto, $valorUni, $quantidade);
        }
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 5</title>
</head>
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <form action="atividade_5.php" method="POST">
        <label>Nome do Produto:</label>
        <input type="text" name="produto" value="<?= isset($nomeProduto) ? $nomeProduto : '' ?>">
        <br>
        <label>Valor Unitário:</label>
        <input type="text" name="valorUni" value="<?= isset($valorUni) ? $valorUni : '' ?>">
        <br>
        <label>Quantidade:</label>
        <input type="text" name="quantidade" value="<?= isset($quantidade) ? $quantidade : '' ?>">
        <br>
        <button name="btnEnviar">ENVIAR</button>
    </form>

    <?= isset($msgError) ? $msgError : '' ?>

    <?php if(isset($resultado) && $resultado != ''){ ?>
        <span>Resultado Final:</span>
        <input disabled value="R$ <?= isset($resultado) ? number_format($resultado, 2, ',', '.') : '' ?>">
    <?php } ?>
</body>
</html>