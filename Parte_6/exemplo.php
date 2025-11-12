<?php

    // if: SE.
    // else if: OU SE - SE NÃO.
    // else: OU.
    // isset: EXISTIR.

    // POST: ENvio de dados de forma oculta, através do protocolo http / https.
    // GET: ENvio de dados através da URL dos navegadores.

    if(isset($_POST['btnEnviar'])){
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        $cidade = $_POST['cidade'];

        echo 'Meu nome é ' . $nome . ' e tenho ' . $idade . ' anos de idade, e moro na cidade de ' . $cidade . '.<br>';
        echo "Meu nome é $nome e tenho $idade anos de idade, e moro na cidade de $cidade.<br>";
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
        <label>Digite seu Nome:</label>
        <input type="text" name="nome">
        <br>
        <label>Digite sua Idade:</label>
        <input type="number" name="idade">
        <br>
        <label>Digite sua Cidade:</label>
        <input type="text" name="cidade">
        <br>
        <button name="btnEnviar">ENVIAR</button>
    </form>
</body>
</html>