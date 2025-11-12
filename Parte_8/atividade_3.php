<?php

    if(isset($_POST['btnCalcular'])){
        $nota1 = trim($_POST['nota1']);
        $nota2 = trim($_POST['nota2']);
        $nota3 = trim($_POST['nota3']);
        $nota4 = trim($_POST['nota4']);

        if($nota1 == '' || $nota2 == '' || $nota3 == '' || $nota4 == ''){
            $msgError = '<strong style="color: red;">Preencher todos os campos obrigatório!</strong>';
        }else{

            $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;

            if($media < 0){
                $status = '<strong style="color: red;">Aluno sem Média!</strong>';
            }else if($media >= 0 && $media < 40){
                $status = '<strong style="color: red;">Aluno REPROVADO!</strong>';
            }else if($media >= 40 && $media < 60){
                $status = '<strong style="color: orange;">Aluno EXAME!</strong>';
            }else{
                $status = '<strong style="color: green;">Aluno APROVADO!</strong>';
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 3</title>
</head>
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <form action="atividade_3.php" method="POST">
        <label>1º Bimestre:</label>
        <input type="number" name="nota1" value="<?= isset($nota1) ? $nota1 : '' ?>">
        <br>
        <label>2º Bimestre:</label>
        <input type="number" name="nota2" value="<?= isset($nota2) ? $nota2 : '' ?>">
        <br>
        <label>3º Bimestre:</label>
        <input type="number" name="nota3" value="<?= isset($nota3) ? $nota3 : '' ?>">
        <br>
        <label>4º Bimestre:</label>
        <input type="number" name="nota4" value="<?= isset($nota4) ? $nota4 : '' ?>">
        <br>
        <button name="btnCalcular">CALCULAR</button>
    </form>

    <?php if(isset($media) && $media != ''){ ?>
        <hr>
        <span>Resultado Final:</span>
        <input disabled value="<?= isset($media) ? $media : '' ?>">
        <br>
    <?php } ?>

    <!-- Retorno de validações do PHP. -->
    <?= isset($msgError) ? $msgError : '' ?>
    <?= isset($status) ? $status : '' ?>
    <!-- ------------------------------ -->
</body>
</html>