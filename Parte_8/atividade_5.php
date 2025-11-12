<?php

    if(isset($_POST['btnCalcular'])){
        $peso = trim($_POST['peso']);
        $altura = trim($_POST['altura']);

        if($peso == '' || $altura == ''){
            $msgError = '<strong style="color: red;">Preencher todos os campos obrigatório!</strong>';
        }else{

            $imc = round($peso / ($altura * $altura), 3);

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
        <label>Digite seu Peso:</label>
        <input type="text" name="peso" value="<?= isset($peso) ? $peso : '' ?>">
        <br>
        <label>Digite sua Altura:</label>
        <input type="text" name="altura" value="<?= isset($altura) ? $altura : '' ?>">
        <br>  
        <button name="btnCalcular">CALCULAR</button>      
    </form>

    <?php if(isset($imc) && $imc != ''){ ?>
        <hr>
        <span>Resultado do IMC:</span>
        <input disabled value="<?= isset($imc) ? $imc : '' ?>">
        <br>
    <?php } ?>

    <!-- Retorno de validações do PHP. -->
    <?= isset($msgError) ? $msgError : '' ?>
    <?= isset($status) ? $status : '' ?>
    <!-- ------------------------------ -->
</body>
</html>