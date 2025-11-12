<?php

    $tabuada = '';

    if(isset($_POST['btnCalcular'])){
        $tabuada = $_POST['tabuada'];

        if($tabuada == ''){
            $msgError = '<strong style="color: red;">Preencher todos os campos obrigatórios!</strong>';
        }else{
            for($i=0; $i <= 10; $i++){
                echo $tabuada . ' X ' . $i . ' = ' . ($tabuada * $i) . '.<br>';
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
    <h1>TABUADA.</h1>
    <form action="atividade_4.php" method="POST">
        <label>Selecione a Tabuada desejada:</label>
        <select name="tabuada">
            <option value="">Selecione</option>
            <option value="0" <?= $tabuada == 0 ? 'selected' : '' ?>>0</option>
            <option value="1" <?= $tabuada == 1 ? 'selected' : '' ?>>1</option>
            <option value="2" <?= $tabuada == 2 ? 'selected' : '' ?>>2</option>
            <option value="3" <?= $tabuada == 3 ? 'selected' : '' ?>>3</option>
            <option value="4" <?= $tabuada == 4 ? 'selected' : '' ?>>4</option>
            <option value="5" <?= $tabuada == 5 ? 'selected' : '' ?>>5</option>
            <option value="6" <?= $tabuada == 6 ? 'selected' : '' ?>>6</option>
            <option value="7" <?= $tabuada == 7 ? 'selected' : '' ?>>7</option>
            <option value="8" <?= $tabuada == 8 ? 'selected' : '' ?>>8</option>
            <option value="9" <?= $tabuada == 9 ? 'selected' : '' ?>>9</option>
            <option value="10" <?= $tabuada == 10 ? 'selected' : '' ?>>10</option>
        </select>
        <br>
        <button name="btnCalcular">CALCULAR</button>
    </form>
    <?= isset($msgError) ? $msgError : '' ?>
</body>
</html>