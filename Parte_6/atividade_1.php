<?php

    if(isset($_POST['btnEnviar'])){
        $nome = $_POST['nomePrato'];
        $descricao = $_POST['desc'];
        $custo = $_POST['valor'];
        $ingredientes = $_POST['ingredientes'];

        echo 'Nome do Prato: ' . $nome . '.<br>Descrição: ' . $descricao . '.<br>Preço (R$): ' . $custo . '.<br>Ingredientes: ' . $ingredientes . '.<hr>';
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
        <label>Digite o Nome do Prato:</label>
        <input type="text" name="nomePrato">
        <br>
        <label>Digite a Descrição:</label>
        <input type="text" name="desc">
        <br>
        <label>Digite o Preço (R$):</label>
        <input type="text" name="valor">
        <br>
        <label>Digite os Ingredientes:</label>
        <input type="text" name="ingredientes">
        <br>
        <button name="btnEnviar">ENVIAR</button>
    </form>
</body>
</html>