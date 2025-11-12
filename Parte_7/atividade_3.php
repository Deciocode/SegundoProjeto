<?php

    $gJaneiro = '';
    $gFevereiro = '';
    $gMarco = '';
    $gAbril = '';
    $gMaio = '';
    $gJunho = '';
    $gJulho = '';
    $gAgosto = '';
    $gSetembro = '';
    $gOutubro = '';
    $gNovembro = '';
    $gDezembro = '';
    $pJaneiro = '';
    $pFevereiro = '';
    $pMarco = '';
    $pAbril = '';
    $pMaio = '';
    $pJunho = '';
    $pJulho = '';
    $pAgosto = '';
    $pSetembro = '';
    $pOutubro = '';
    $pNovembro = '';
    $pDezembro = '';
    $totalDeGanhos = '';
    $totalDePerdas = '';
    $lucroRealAnual = '';
    $lucroRealJaneiro = '';
    $lucroRealFevereiro = '';
    $lucroRealMarco = '';
    $lucroRealAbril = '';
    $lucroRealMaio = '';
    $lucroRealJunho = '';
    $lucroRealJulho = '';
    $lucroRealAgosto = '';
    $lucroRealSetembro = '';
    $lucroRealOutubro = '';
    $lucroRealNovembro = '';
    $lucroRealDezembro = '';

if (isset($_POST['btnCalcular'])) {
    $gJaneiro = trim($_POST['gJaneiro']);
    $gFevereiro = trim($_POST['gFevereiro']);
    $gMarco = trim($_POST['gMarco']);
    $gAbril = trim($_POST['gAbril']);
    $gMaio = trim($_POST['gMaio']);
    $gJunho = trim($_POST['gJunho']);
    $gJulho = trim($_POST['gJulho']);
    $gAgosto = trim($_POST['gAgosto']);
    $gSetembro = trim($_POST['gSetembro']);
    $gOutubro = trim($_POST['gOutubro']);
    $gNovembro = trim($_POST['gNovembro']);
    $gDezembro = trim($_POST['gDezembro']);
    $pJaneiro = trim($_POST['pJaneiro']);
    $pFevereiro = trim($_POST['pFevereiro']);
    $pMarco = trim($_POST['pMarco']);
    $pAbril = trim($_POST['pAbril']);
    $pMaio = trim($_POST['pMaio']);
    $pJunho = trim($_POST['pJunho']);
    $pJulho = trim($_POST['pJulho']);
    $pAgosto = trim($_POST['pAgosto']);
    $pSetembro = trim($_POST['pSetembro']);
    $pOutubro = trim($_POST['pOutubro']);
    $pNovembro = trim($_POST['pNovembro']);
    $pDezembro = trim($_POST['pDezembro']);

    $totalDeGanhos = $gJaneiro + $gFevereiro + $gMarco + $gAbril + $gMaio + $gJunho + $gJulho + $gAgosto + $gSetembro + $gOutubro + $gNovembro + $gDezembro;
    $totalDePerdas = $pJaneiro + $pFevereiro + $pMarco + $pAbril + $pMaio + $pJunho + $pJulho + $pAgosto + $pSetembro + $pOutubro + $pNovembro + $pDezembro;
    $lucroRealAnual = $totalDeGanhos - $totalDePerdas;

    $lucroRealJaneiro = $gJaneiro - $pJaneiro;
    $lucroRealFevereiro = $gFevereiro - $pFevereiro;
    $lucroRealMarco = $gMarco - $pMarco;
    $lucroRealAbril = $gAbril - $pAbril;
    $lucroRealMaio = $gMaio - $pMaio;
    $lucroRealJunho = $gJunho - $pJunho;
    $lucroRealJulho = $gJulho - $pJulho;
    $lucroRealAgosto = $gAgosto - $pAgosto;
    $lucroRealSetembro = $gSetembro - $pSetembro;
    $lucroRealOutubro = $gOutubro - $pOutubro;
    $lucroRealNovembro = $gNovembro - $pNovembro;
    $lucroRealDezembro = $gDezembro - $pDezembro;
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Atividade 3</title>
</head>

<body>
    <form action="atividade_3.php" method="POST">
        <div class="boxForm">
            <div class="formOne">
                <label>Digite os Ganhos de Janeiro:</label>
                <input type="text" name="gJaneiro" value="<?= $gJaneiro ?>">
                <label>Digite os Ganhos de Fevereiro:</label>
                <input type="text" name="gFevereiro" value="<?= $gFevereiro ?>">
                <label>Digite os Ganhos de Março:</label>
                <input type="text" name="gMarco" value="<?= $gMarco ?>">
                <label>Digite os Ganhos de Abril:</label>
                <input type="text" name="gAbril" value="<?= $gAbril ?>">
                <label>Digite os Ganhos de Maio:</label>
                <input type="text" name="gMaio" value="<?= $gMaio ?>">
                <label>Digite os Ganhos de Junho:</label>
                <input type="text" name="gJunho" value="<?= $gJunho ?>">
                <label>Digite os Ganhos de Julho:</label>
                <input type="text" name="gJulho" value="<?= $gJulho ?>">
                <label>Digite os Ganhos de Agosto:</label>
                <input type="text" name="gAgosto" value="<?= $gAgosto ?>">
                <label>Digite os Ganhos de Setembro:</label>
                <input type="text" name="gSetembro" value="<?= $gSetembro ?>">
                <label>Digite os Ganhos de Outubro:</label>
                <input type="text" name="gOutubro" value="<?= $gOutubro ?>">
                <label>Digite os Ganhos de Novembro:</label>
                <input type="text" name="gNovembro" value="<?= $gNovembro ?>">
                <label>Digite os Ganhos de Dezembro:</label>
                <input type="text" name="gDezembro" value="<?= $gDezembro ?>">
            </div>

            <div class="formTwo">
                <label>Digite os Perdas de Janeiro:</label>
                <input type="text" name="pJaneiro" value="<?= $pJaneiro ?>">
                <label>Digite os Perdas de Fevereiro:</label>
                <input type="text" name="pFevereiro" value="<?= $pFevereiro ?>">
                <label>Digite os Perdas de Março:</label>
                <input type="text" name="pMarco" value="<?= $pMarco ?>">
                <label>Digite os Perdas de Abril:</label>
                <input type="text" name="pAbril" value="<?= $pAbril ?>">
                <label>Digite os Perdas de Maio:</label>
                <input type="text" name="pMaio" value="<?= $pMaio ?>">
                <label>Digite os Perdas de Junho:</label>
                <input type="text" name="pJunho" value="<?= $pJunho ?>">
                <label>Digite os Perdas de Julho:</label>
                <input type="text" name="pJulho" value="<?= $pJulho ?>">
                <label>Digite os Perdas de Agosto:</label>
                <input type="text" name="pAgosto" value="<?= $pAgosto ?>">
                <label>Digite os Perdas de Setembro:</label>
                <input type="text" name="pSetembro" value="<?= $pSetembro ?>">
                <label>Digite os Perdas de Outubro:</label>
                <input type="text" name="pOutubro" value="<?= $pOutubro ?>">
                <label>Digite os Perdas de Novembro:</label>
                <input type="text" name="pNovembro" value="<?= $pNovembro ?>">
                <label>Digite os Perdas de Dezembro:</label>
                <input type="text" name="pDezembro" value="<?= $pDezembro ?>">
            </div>
        </div>

        <div class="alignBtn">
            <button name="btnCalcular" class="btn">Calcular</button>
        </div>
    </form>

    <div class="resultado">
        <div class="boxOne">
            <span>Total dos Ganhos (R$)</span>
            <input class="resultBoxOne" disabled value="R$ <?= number_format($totalDeGanhos, 2, ',', '.') ?>">
            <span>Total das Perdas (R$)</span>
            <input class="resultBoxOne" disabled value="R$ <?= number_format($totalDePerdas, 2, ',', '.') ?>">
            <span>Lucro Real Anual (R$)</span>
            <input class="resultBoxOne" disabled value="R$ <?= number_format($lucroRealAnual, 2, ',', '.') ?>">
        </div>

        <div class="boxTwo">
            <div class="resultColum1">
                <label>Lucro Real de Janeiro:</label>
                <input class="resultMeses" disabled value="R$ <?= number_format($lucroRealJaneiro, 2, ',', '.') ?>">
                <label>Lucro Real de Fevereiro:</label>
                <input class="resultMeses" disabled value="R$ <?= number_format($lucroRealFevereiro, 2, ',', '.') ?>">
                <label>Lucro Real de Março:</label>
                <input class="resultMeses" disabled value="R$ <?= number_format($lucroRealMarco, 2, ',', '.') ?>">
                <label>Lucro Real de Abril:</label>
                <input class="resultMeses" disabled value="R$ <?= number_format($lucroRealAbril, 2, ',', '.') ?>">
                <label>Lucro Real de Maio:</label>
                <input class="resultMeses" disabled value="R$ <?= number_format($lucroRealMaio, 2, ',', '.') ?>">
                <label>Lucro Real de Junho:</label>
                <input class="resultMeses" disabled value="R$ <?= number_format($lucroRealJunho, 2, ',', '.') ?>">
            </div>

            <div class="resultColum2">
                <label>Lucro Real de Julho:</label>
                <input class="resultMeses" disabled value="R$ <?= number_format($lucroRealJulho, 2, ',', '.') ?>">
                <label>Lucro Real de Agosto:</label>
                <input class="resultMeses" disabled value="R$ <?= number_format($lucroRealAgosto, 2, ',', '.') ?>">
                <label>Lucro Real de Setembro:</label>
                <input class="resultMeses" disabled value="R$ <?= number_format($lucroRealSetembro, 2, ',', '.') ?>">
                <label>Lucro Real de Outubro:</label>
                <input class="resultMeses" disabled value="R$ <?= number_format($lucroRealOutubro, 2, ',', '.') ?>">
                <label>Lucro Real de Novembro:</label>
                <input class="resultMeses" disabled value="R$ <?= number_format($lucroRealNovembro, 2, ',', '.') ?>">
                <label>Lucro Real de Dezembro:</label>
                <input class="resultMeses" disabled value="R$ <?= number_format($lucroRealDezembro, 2, ',', '.') ?>">
            </div>
        </div>
    </div>
</body>

</html>