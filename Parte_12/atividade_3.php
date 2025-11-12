<?php

    require_once 'ClassDAO.php';

    if(isset($_POST['btnCalcular'])){
        $meses = trim($_POST['meses']);
        $ganhos = trim($_POST['ganhos']);
        $lucro = trim($_POST['lucro']);
        $perda = trim($_POST['perda']);

        $objDAO = new ClassDAO();
        $retorno = $objDAO->CalcularSalario($meses, $ganhos, $lucro, $perda);

        if($retorno == 0){
            $msgError = '<div style="color: red; font-family: tahoma;">Preencher todos os Campos Obrigatórios!</div>';
        }
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 3</title>
</head>
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <span><?= isset($msgError) ? $msgError : '' ?></span>
    <form action="atividade_3.php" method="POST">
        <label>Meses trabalhados:</label>
        <input type="text" name="meses" value="<?= isset($meses) ? $meses : '' ?>">
        <br>
        <label>Ganho Médio Mensal:</label>
        <input type="text" name="ganhos" value="<?= isset($ganhos) ? $ganhos : '' ?>">
        <br>
        <label>Percentual de Lucro Total (%):</label>
        <input type="text" name="lucro" value="<?= isset($lucro) ? $lucro : '' ?>">
        <br>
        <label>Percentual de Perda Total (%):</label>
        <input type="text" name="perda" value="<?= isset($perda) ? $perda : '' ?>">
        <br>
        <button name="btnCalcular">CALCULAR</button>
    </form>
    <?php if(isset($retorno) && $retorno != ''): ?>
        <span>Resultado Final: R$ <?= isset($retorno) ? $retorno : '' ?>.</span>
    <?php endif; ?>
</body>
</html>