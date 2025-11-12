<?php

    if(isset($_POST['btnCalcular'])){
        $valor1 = trim($_POST['valor1']);
        $valor2 = trim($_POST['valor2']);
        $valor3 = trim($_POST['valor3']);
        $valor4 = trim($_POST['valor4']);
        $valor5 = trim($_POST['valor5']);

        if($valor1 == '' || $valor2 == '' || $valor3 == '' || $valor4 == '' || $valor5 == ''){
            echo '<strong style="color: red;">Preencher todos os campos obrigatórios!</strong>';
        }else{
            // $primeiraSoma = $valor1 + $valor2;
            // $multiplicar = $primeiraSoma * 2;
            // $segundaSoma = $valor3 + $valor4 + $valor5;
            // $resultado = $multiplicar + $segundaSoma;

            $resultado = (($valor1 + $valor2) * 2) + $valor3 + $valor4 + $valor5;

            if($resultado < 100){
                echo '<strong style="color: green;">Valor MENOR que 100!</strong>';
            }else if($resultado > 100){
                echo '<strong style="color: green;">Valor MAIOR que 100!</strong>';
            }else{
                echo '<strong style="color: green;">Valor IGUAL que 100!</strong>';
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 1</title>
</head>
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <form action="atividade_1.php" method="POST">
        <label>Digite o Primeiro Valor:</label>
        <input type="text" name="valor1" value="<?= isset($valor1) ? $valor1 : '' ?>">
        <br>
        <label>Digite o Segundo Valor:</label>
        <input type="text" name="valor2" value="<?= isset($valor2) ? $valor2 : '' ?>">
        <br>
        <label>Digite o Terceiro Valor:</label>
        <input type="text" name="valor3" value="<?= isset($valor3) ? $valor3 : '' ?>">
        <br>
        <label>Digite o Quarto Valor:</label>
        <input type="text" name="valor4" value="<?= isset($valor4) ? $valor4 : '' ?>">
        <br>
        <label>Digite o Quinto Valor:</label>
        <input type="text" name="valor5" value="<?= isset($valor5) ? $valor5 : '' ?>">
        <br>
        <button name="btnCalcular">CALCULAR</button>
    </form>
    <span>Resultado Final:</span>
    <input disabled value="<?= isset($resultado) ? $resultado : '' ?>">
</body>
</html>