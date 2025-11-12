<?php

    if(
        isset($_GET['nome']) && $_GET['nome'] != '' &&
        isset($_GET['valor']) && $_GET['valor'] != '' &&
        isset($_GET['operacao']) && $_GET['operacao'] != '' &&
        isset($_GET['banco']) && $_GET['banco'] != ''
    ){
        $pessoa = $_GET['nome'];
        $dinheiro = $_GET['valor'];
        $operacao = $_GET['operacao'];
        $banco = $_GET['banco'];

        if($operacao == 'G' || $operacao == 'g'){
            $siglaOp = 'Ganho';
        }else if($operacao == 'P' || $operacao == 'p'){
            $siglaOp = 'Perda';
        }

        if($banco == 'SA' || $banco == 'sa'){
            $siglaBank = 'Santander';
        }else if($banco == 'IT' || $banco == 'it'){
            $siglaBank = 'Itaú';
        }else if($banco == 'SI' || $banco == 'si'){
            $siglaBank = 'Sicredi';
        }

        if($siglaOp == 'Ganho'){
            $resultado = $dinheiro + ($dinheiro * 0.03);
        }else if($siglaOp == 'Perda'){
            $resultado = $dinheiro - ($dinheiro * 0.05);
        }
    }else{
        header('location: page_1.php');
        exit;
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final</title>
</head>
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <span>Nome do Usuário: </span><strong><?= isset($pessoa) ? $pessoa : '' ?></strong>
    <br>
    <span>Valor da Operação (R$): </span><strong>R$ <?= isset($dinheiro) ? number_format($dinheiro, 2, ',', '.') : '' ?></strong>
    <br>
    <span>Operação Realizada: </span><strong><?= isset($siglaOp) ? $siglaOp : '' ?></strong>
    <br>
    <span>Banco Selecionado: </span><strong><?= isset($siglaBank) ? $siglaBank : '' ?></strong>
    <br>
    <span>Resultado Final: </span><strong>R$ <?= isset($resultado) ? number_format($resultado, 2, ',', '.') : '' ?></strong>
</body>
</html>