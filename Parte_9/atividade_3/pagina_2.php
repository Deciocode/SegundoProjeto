<?php
    if(
        isset($_GET['numero1']) && $_GET['numero1'] && 
        isset($_GET['numero2']) && $_GET['numero2'] && 
        isset($_GET['numero3']) && $_GET['numero3'] && 
        isset($_GET['numero4']) && $_GET['numero4'] && 
        isset($_GET['numero5']) && $_GET['numero5']
    ){

        $numer0_1 = $_GET['numero1'];
        $numer0_2 = $_GET['numero2'];
        $numer0_3 = $_GET['numero3'];
        $numer0_4 = $_GET['numero4'];
        $numer0_5 = $_GET['numero5'];

        $calculo = ($numer0_1 + $numer0_2 + $numer0_3) / ($numer0_4 * $numer0_5);

    }else{
        header('location: pagina_1.php');
        exit;
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Final</title>
</head>
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <span>Resultado Final:</span>
    <input disabled value="<?= isset($calculo) ? $calculo : '' ?>">
</body>
</html>