<?php

    require_once './ClassDAO.php';

    // $gas = '';

    if(isset($_POST['btnEnviar'])){
        $gas = $_POST['combustivel'];
        $volume = trim($_POST['qtd']);

        $objDAO = new ClassDAO();
        $resultado = $objDAO->CalcularCombustivel($gas, $volume);

        if($resultado == 0){
            echo '<strong style="color: red;">Preencher todos os campos obrigatórios!</strong>';
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
        <label>Selecione o Combustível:</label>
        <select name="combustivel">
            <option value="">Selecione</option>
            <option value="1" <?= isset($gas) && $gas == 1 ? 'selected' : '' ?>>Etanol</option>
            <option value="2" <?= isset($gas) ? ($gas == 2 ? 'selected' : '') : '' ?>>Gasolina</option>
            <option value="3" <?= $gas == 3 ? 'selected' : '' ?>>Diesel</option>
        </select>
        <br>
        <label>Quantidade (Litros):</label>
        <input type="number" name="qtd" value="<?= isset($volume) ? $volume : '' ?>">
        <br>
        <button name="btnEnviar">ENVIAR</button>
    </form>

    <?php if(isset($resultado) && $resultado != '' && $resultado != 0){ ?>
        <span>Resultado Final:</span>
        <input disabled value="R$ <?= isset($resultado) ? number_format($resultado, 2, ',', '.') : '' ?>">
    <?php } ?>
    
</body>
</html>