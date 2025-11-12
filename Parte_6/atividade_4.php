<?php

    if(isset($_POST['btnEnviar'])){
        $dia = $_POST['data'];
        $p_mes = $_POST['mes_1'];
        $s_mes = $_POST['mes_2'];
        $ano = $_POST['ano'];

        echo $dia . '/' . $p_mes . '/' . $ano . '<br>';
        echo 'Londrina, dia ' . $dia . ' de ' . $s_mes . ' de ' . $ano . '<hr>';
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 4</title>
</head>
<body style="font-family:  'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <form action="atividade_4.php" method="POST">
        <label>Digite o DIA:</label>
        <input type="number" name="data">
        <br>
        <label>Digite o MÊS:</label>
        <input type="number" name="mes_1">
        <br>
        <label>Selecione o MÊS:</label>
        <select name="mes_2" style="width: 145px;">
            <option value="">Selecione</option>
            <option value="Janeiro">Janeiro</option>
            <option value="Fevereiro">Fevereiro</option>
            <option value="Março">Março</option>
            <option value="Abril">Abril</option>
            <option value="Maio">Maio</option>
            <option value="Junho">Junho</option>
            <option value="Julho">Julho</option>
            <option value="Agosto">Agosto</option>
            <option value="Setembro">Setembro</option>
            <option value="Outubro">Outubro</option>
            <option value="Novembro">Novembro</option>
            <option value="Dezembro">Dezembro</option>
        </select>
        <br>
        <label>Digite o ANO:</label>
        <input type="number" name="ano">
        <br>
        <button name="btnEnviar">ENVIAR</button>
    </form>
</body>
</html>