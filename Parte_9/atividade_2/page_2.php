<?php

    if(isset($_POST['btnEnviar'])){
        $nome = trim($_POST['nome']);
        $valor = trim($_POST['valor']);
        $siglaOpr = trim($_POST['siglaOpr']);
        $siglaBanco = trim($_POST['siglaBanco']);

        if($nome == '' || $valor == '' || $siglaOpr == '' || $siglaBanco == ''){
            $msgError = '<strong style="color: red;">Preencher todos os campos obrigatório!</strong>';
        }else{
            header("location: page_3.php?nome=$nome&valor=$valor&operacao=$siglaOpr&banco=$siglaBanco");
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
    <form action="page_2.php" method="POST">
        <label>Digite seu Nome:</label>
        <input type="text" name="nome" value="<?= isset($nome) ? $nome : '' ?>">
        <br>
        <label>Valor do Investimento:</label>
        <input type="text" name="valor" value="<?= isset($valor) ? $valor : '' ?>">
        <br>
        <label>Selecione a Sigla da Operação Correta:</label>
        <select name="siglaOpr">    
            <option value="">Selecione</option>
            <option value="G">Ganho</option>
            <option value="P">Perda</option>
        </select>
        <br>
        <label>Selecione a Sigla do Banco Correta:</label>
        <select name="siglaBanco">    
            <option value="">Selecione</option>
            <option value="sa">Santander</option>
            <option value="it">Itaú</option>
            <option value="si">Sicredi</option>
        </select>
        <br>
        <button name="btnEnviar">ENVIAR</button>
    </form>

    <!-- Retorno de validações do PHP. -->
    <?= isset($msgError) ? $msgError : '' ?>
    <!-- ------------------------------ -->

</body>
</html>