<?php

    $valor1 = '';
    $valor2 = '';
    $valor3 = '';
    $valor4 = '';
    $valor5 = '';
    $calculo = '';

    if(isset($_POST['btnCalcular'])){
        $valor1 = trim($_POST['valor1']);
        $valor2 = trim($_POST['valor2']);
        $valor3 = trim($_POST['valor3']);
        $valor4 = trim($_POST['valor4']);
        $valor5 = trim($_POST['valor5']);

        // $soma = $valor1 + $valor2 + $valor3;
        // $vezes = $valor4 * $valor5;
        // $resultado = $soma /  $vezes;

        $calculo = ($valor1 + $valor2 + $valor3) / ($valor4 * $valor5);
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
        <label>Digite o Primeiro Valor:</label>
        <input type="text" name="valor1" value="<?= $valor1 ?>">
        <br>
        <label>Digite o Segundo Valor:</label>
        <input type="text" name="valor2" value="<?= $valor2 ?>">
        <br>
        <label>Digite o Terceiro Valor:</label>
        <input type="text" name="valor3" value="<?= $valor3 ?>">
        <br>
        <label>Digite o Quarto Valor:</label>
        <input type="text" name="valor4" value="<?= $valor4 ?>">
        <br>
        <label>Digite o Quinto Valor:</label>
        <input type="text" name="valor5" value="<?= $valor5 ?>">
        <br>
        <button name="btnCalcular">CALCULAR</button>
    </form>
    <strong>Resultado Final:</strong>
    <input disabled value="<?= $calculo ?>">
</body>
</html>