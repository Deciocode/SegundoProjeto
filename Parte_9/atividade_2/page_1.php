<?php

    if(isset($_POST['btnEnviar'])){
        $nome = trim($_POST['nome']);
        $valor = trim($_POST['valor']);
        $siglaOpr = trim($_POST['siglaOpr']);
        $siglaBanco = trim($_POST['siglaBanco']);

        if($nome == '' || $valor == '' || $siglaOpr == '' || $siglaBanco == ''){
            $msgError = '<strong style="color: red;">Preencher todos os campos obrigatório!</strong>';
        }else if($siglaOpr != 'G' && $siglaOpr != 'g' && $siglaOpr != 'P' && $siglaOpr != 'p'){
            $msgError = '<strong style="color: red;">Digite a Sigla correta da OPERAÇÃO!</strong>';
        }else if($siglaBanco != 'SA' && $siglaBanco != 'sa' && $siglaBanco != 'IT' && $siglaBanco != 'it' && $siglaBanco != 'SI' && $siglaBanco != 'si'){
            $msgError = '<strong style="color: red;">Digite a Sigla correta do BANCO!</strong>';
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
    <form action="page_1.php" method="POST">
        <label>Digite seu Nome:</label>
        <input type="text" name="nome" value="<?= isset($nome) ? $nome : '' ?>">
        <br>
        <label>Valor do Investimento:</label>
        <input type="text" name="valor" value="<?= isset($valor) ? $valor : '' ?>">
        <p style="margin: 0px;">
            <h3 style="margin: 0px; padding: 0px;">Siglas da Operação.</h3>
            <span>Sigla G: </span><strong>Ganho de 3%.</strong>
            <br>
            <span>Sigla P: </span><strong>Perda de 5%.</strong>
            <br>
            <label>Digite a Sigla da Operação:</label>
            <input type="text" name="siglaOpr" value="<?= isset($siglaOpr) ? $siglaOpr : '' ?>">
        </p>
        <p style="margin: 0px;">
            <h3 style="margin: 0px; padding: 0px;">Siglas dos Bancos.</h3>
            <span>Sigla SA: </span><strong>Santander.</strong>
            <br>
            <span>Sigla IT: </span><strong>Itau.</strong>
            <br>
            <span>Sigla SI: </span><strong>Sicredi.</strong>
            <br>
            <label>Digite uma Sigla do Banco:</label>
            <input type="text" name="siglaBanco" value="<?= isset($siglaBanco) ? $siglaBanco : '' ?>">
        </p>
        <button name="btnEnviar">ENVIAR</button>
    </form>

    <!-- Retorno de validações do PHP. -->
    <?= isset($msgError) ? $msgError : '' ?>
    <!-- ------------------------------ -->

</body>
</html>