<?php
    if(
        isset($_GET['pessoa']) && $_GET['pessoa'] != '' &&
        isset($_GET['massa']) && $_GET['massa'] != '' &&
        isset($_GET['tamanho']) && $_GET['tamanho'] != '' 
    ){
        $people = $_GET['pessoa'];
        $weight = $_GET['massa'];
        $height = $_GET['tamanho'];

        $imc = round($weight / ($height * $height), 2);

        if($imc <= 0){
            $status = '<strong style="color: red;">Erro no calculo!</strong>';
        }else if($imc > 0 && $imc < 21){
            $status = '<strong style="color: yellow;">Magro!</strong>';
        }else if($imc >= 21 && $imc < 26){
            $status = '<strong style="color: green;">Peso Ideal!</strong>';
        }else if($imc >= 26 && $imc < 31){
            $status = '<strong style="color: orange;">Obeso!</strong>';
        }else{
            $status = '<strong style="color: red;">Muito Obeso!</strong>';
        }
    }else{
        header('location: primeira_page.php');
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
    <span>Nome do Usuário: </span><strong><?= isset($people) ? $people : '' ?></strong>
    <br>
    <span>Peso do Usuário: </span><strong><?= isset($weight) ? $weight : '' ?></strong>
    <br>
    <span>Altura do Usuário: </span><strong><?= isset($height) ? $height : '' ?></strong>
    <br>
    <span>Resultado do IMC: </span><strong><?= isset($imc) ? $imc : '' ?></strong>
    <br>
    <span>Status: </span><strong><?= isset($status) ? $status : '' ?></strong>
</body>
</html>