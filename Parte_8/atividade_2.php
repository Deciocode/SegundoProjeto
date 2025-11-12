<?php

    if(isset($_POST['btnCalcular'])){
        $valor1 = trim($_POST['vl1']);
        $valor2 = trim($_POST['vl2']);
        $valor3 = trim($_POST['vl3']);

        if($valor1 == '' || $valor2 == '' || $valor3 == ''){
            $msgError = '<strong style="color: red;">Preencher todos os campos obrigatório!</strong>';
        }else{
            $resultado = $valor2 / 2;

            if($resultado <= $valor1 || $resultado >= $valor3){
                $status = '<strong style="color: orange;">O Resultado NÃO ESTA entre o Primeiro e o Terceiro valor!</strong>';
            }else{
                $status = '<strong style="color: green;">O Resultado ESTA entre o Primeiro e o Terceiro valor!</strong>';
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 2</title>
</head>
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
<form action="atividade_2.php" method="POST">
        <label>Valor 1:</label>
        <input type="text" name="vl1" value="<?= isset($valor1) ? $valor1 : '' ?>">
        <br>
        <label>Valor 2:</label>
        <input type="text" name="vl2" value="<?= isset($valor2) ? $valor2 : '' ?>">
        <br>
        <label>Valor 3:</label>
        <input type="text" name="vl3" value="<?= isset($valor3) ? $valor3 : '' ?>">
        <br>
        <button name="btnCalcular">CALCULAR</button>
    </form>

    <?php if(isset($resultado) && $resultado != ''){ ?>
        <span>Resultado Final:</span>
        <input disabled value="<?= isset($resultado) ? $resultado : '' ?>">
        <br>
    <?php } ?>

    <!-- Retorno de validações do PHP. -->
    <?= isset($msgError) ? $msgError : '' ?>
    <?= isset($status) ? $status : '' ?>
    <!-- ------------------------------ -->
</body>
</html>