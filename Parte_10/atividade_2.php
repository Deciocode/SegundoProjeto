<?php

    if(isset($_POST['btnEnviar'])){
        $fruta1 = trim($_POST['fruta1']);
        $fruta2 = trim($_POST['fruta2']);
        $fruta3 = trim($_POST['fruta3']);
        $fruta4 = trim($_POST['fruta4']);
        $fruta5 = trim($_POST['fruta5']);

        if($fruta1 == '' || $fruta2 == '' || $fruta3 == '' || $fruta4 == '' || $fruta5 == ''){
            echo '<strong style="color: red;">Preencher todos os campos obrigatórios!</strong>';
        }else{
            $frutas = array($fruta1, $fruta2, $fruta3, $fruta4, $fruta5);

            // $frutas = array();

            // $frutas[] = $fruta1;
            // $frutas[] = $fruta2;
            // $frutas[] = $fruta3;
            // $frutas[] = $fruta4;
            // $frutas[] = $fruta5;

            for($i=0; $i < count($frutas); $i++){
                echo 'Fruta digitada foi ' . $frutas[$i] . ' e esta na posição ' . $i . ' do Array.<br>';
            }
            echo '<hr>';
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
        <label>Fruta Nº 1:</label>
        <input type="text" name="fruta1" value="<?= isset($fruta1) ? $fruta1 : '' ?>">
        <br>
        <label>Fruta Nº 2:</label>
        <input type="text" name="fruta2" value="<?= isset($fruta2) ? $fruta2 : '' ?>">
        <br>
        <label>Fruta Nº 3:</label>
        <input type="text" name="fruta3" value="<?= isset($fruta3) ? $fruta3 : '' ?>">
        <br>
        <label>Fruta Nº 4:</label>
        <input type="text" name="fruta4" value="<?= isset($fruta4) ? $fruta4 : '' ?>">
        <br>
        <label>Fruta Nº 5:</label>
        <input type="text" name="fruta5" value="<?= isset($fruta5) ? $fruta5 : '' ?>">
        <br>
        <button name="btnEnviar">ENVIAR</button>
    </form>
</body>
</html>