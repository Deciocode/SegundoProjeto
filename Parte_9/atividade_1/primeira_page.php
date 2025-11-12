<?php

    if(isset($_POST['btnEnviar'])){
        $nome = trim(($_POST['nome']));
        $peso = trim(($_POST['peso']));
        $altura = trim(($_POST['altura']));

        if($nome == '' || $peso == '' || $altura == ''){
            $msgError = '<strong style="color: red;">Preencher todos os campos obrigatório!</strong>';
        }else{
            // O Método de enio de dados por GET, sera executado pelo PHP e não pelo HTML (form), pois é necessário apssar pela validação!
            // {GET = ?}
            header("location: segunda_page.php?pessoa=$nome&massa=$peso&tamanho=$altura");
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
    <form action="primeira_page.php" method="POST">
        <label>Digite seu Nome:</label>
        <input type="text" name="nome" value="<?= isset($nome) ? $nome : '' ?>">
        <br>
        <label>Digite seu Peso:</label>
        <input type="text" name="peso" value="<?= isset($peso) ? $peso : '' ?>">
        <br>
        <label>Digite sua Altura:</label>
        <input type="text" name="altura" value="<?= isset($altura) ? $altura : '' ?>">
        <br>
        <button name="btnEnviar">ENVIAR</button>
    </form>

    <!-- Retorno de validações do PHP. -->
    <?= isset($msgError) ? $msgError : '' ?>
    <!-- ------------------------------ -->

</body>
</html>