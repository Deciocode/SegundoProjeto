<?php

    if(isset($_POST['btnCalcular'])){
        $salario = trim($_POST['salario']);

        if(!is_numeric($salario)){
            $status = '<strong style="color: red;">Preencher o campo com caracteres Numéricos!</strong>';
        }else if($salario == ''){
            $msgError = '<strong style="color: red;">Preencher todos os campos obrigatório!</strong>';
        }else{

            $primeiroAumento = ($salario * 15) / 100;
            $segundoAumento = $salario * 0.18;
            $totalDeAumento = $primeiroAumento + $segundoAumento;
            $salarioTotal = $salario + $totalDeAumento;

            if($totalDeAumento <= 0){
                $status = '<strong style="color: red;">Não houve AUMENTO!</strong>';
            }else if($totalDeAumento > 0 && $totalDeAumento <= 100){
                $status = '<strong style="color: red;">Aumento RUIM!</strong>';
            }else if($totalDeAumento > 100 && $totalDeAumento <= 200){
                $status = '<strong style="color: orange;">Aumento RAZOAVEL!</strong>';
            }else if($totalDeAumento > 200 && $totalDeAumento <= 300){
                $status = '<strong style="color: green;">Aumento BOM!</strong>';
            }else if($totalDeAumento > 300 && $totalDeAumento <= 400){
                $status = '<strong style="color: green;">Aumento ÓTIMO!</strong>';
            }else{
                $status = '<strong style="color: green;">Aumento EXCELENTE!</strong>';
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 6</title>
</head>
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <form action="atividade_6.php" method="POST">   
        <label>Digite um Salário (R$):</label>
        <input type="text" name="salario" value="<?= isset($salario) ? $salario : '' ?>">
        <button name="btnCalcular">CALCULAR</button>
    </form>

    <?php 
        if(
            isset($primeiroAumento) && $primeiroAumento != '' &&
            isset($segundoAumento) && $segundoAumento != '' &&
            isset($totalDeAumento) && $totalDeAumento != '' &&
            isset($salarioTotal) && $salarioTotal != ''
        ){ 
    ?>
        <hr>
        <span>Aumento de 15%:</span>
        <input disabled value="R$ <?= isset($primeiroAumento) ? number_format($primeiroAumento, 2, ',', '.') : '' ?>">
        <br>
        <span>Aumento de 18%:</span>
        <input disabled value="R$ <?= isset($segundoAumento) ? number_format($segundoAumento, 2, ',', '.') : '' ?>">
        <br>
        <span>Aumento Total:</span>
        <input disabled value="R$ <?= isset($totalDeAumento) ? number_format($totalDeAumento, 2, ',', '.') : '' ?>">
        <br>
        <span>Salário Total Final:</span>
        <input disabled value="R$ <?= isset($salarioTotal) ? number_format($salarioTotal, 2, ',', '.') : '' ?>">
        <br>
    <?php } ?>

    <!-- Retorno de validações do PHP. -->
    <?= isset($msgError) ? $msgError : '' ?>
    <?= isset($status) ? $status : '' ?>
    <!-- ------------------------------ -->
</body>
</html>