<?php

    if(isset($_POST['btnCalcular'])){
        $salario = trim($_POST['salario']);
        $aumento = trim($_POST['aumento']);

        if($salario == '' || $aumento == ''){
            $msgError = '<strong style="color: red;">Preencher todos os campos obrigatório!</strong>';
        }else{

            if($salario < 0){
                $validarSalario = $salario * -1;

                $salario = $validarSalario;

                $totalDeAumento = ($salario * $aumento) / 100;
                $salarioTotal = $salario + $totalDeAumento;
            }

            if($totalDeAumento <= 0){
                $status = '<strong style="color: red;">Não houve aumento!</strong>';
            }else if($totalDeAumento > 0 && $totalDeAumento <= 100){
                $status = '<strong style="color: green;">Aumento NÍVEL 1!</strong>';
            }else if($totalDeAumento > 100 && $totalDeAumento <= 200){
                $status = '<strong style="color: green;">Aumento NÍVEL 2!</strong>';
            }else if($totalDeAumento > 200 && $totalDeAumento <= 300){
                $status = '<strong style="color: green;">Aumento NÍVEL 3!</strong>';
            }else if($totalDeAumento > 300 && $totalDeAumento <= 400){
                $status = '<strong style="color: green;">Aumento NÍVEL 4!</strong>';
            }else{
                $status = '<strong style="color: green;">Aumento NÍVEL 5!</strong>';
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 4</title>
</head>
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <form action="atividade_4.php" method="POST">
        <label>Salário (R$):</label>
        <input type="text" name="salario" value="<?= isset($salario) ? $salario : '' ?>">
        <br>
        <label>Aumento (%):</label>
        <input type="text" name="aumento" value="<?= isset($aumento) ? $aumento : '' ?>">
        <br>  
        <button name="btnCalcular">CALCULAR</button>      
    </form>

    <?php if(isset($totalDeAumento) && $totalDeAumento != '' && isset($salarioTotal) && $salarioTotal != ''){ ?>
        <hr>
        <span>Total de Aumento (% - R$):</span>
        <input disabled value="R$ <?= isset($totalDeAumento) ? number_format($totalDeAumento, 2, ',', '.') : '' ?>">
        <br>
        <span>Salário Total (R$):</span>
        <input disabled value="R$ <?= isset($salarioTotal) ? number_format($salarioTotal, 2, ',', '.') : '' ?>">
        <br>
    <?php } ?>

    <!-- Retorno de validações do PHP. -->
    <?= isset($msgError) ? $msgError : '' ?>
    <?= isset($status) ? $status : '' ?>
    <!-- ------------------------------ -->
</body>
</html>