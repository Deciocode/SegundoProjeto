<?php

    if(isset($_POST['btnEnviar'])){
        $nome = trim($_POST['nome']);
        $idade = trim($_POST['idade']);

        if($nome == '' || $idade == ''){
            echo 'Error!';
        }else{
            header("location: pagina_final.php?pessoa=$nome&idade=$idade");
            exit;
        }
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início</title>
</head>
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <form action="pagina_inicio.php" method="POST">
        <label>Digite seu Nome:</label>
        <input type="text" name="nome">
        <br>
        <label>Digite sua Idade:</label>
        <input type="number" name="idade">
        <br>
        <button name="btnEnviar">ENVIAR</button>
    </form>
</body>
</html>