<?php

    // Operadores Lógicos:
    // || - OU.
    // && - E.
    // ! - NEGAÇÃO.

    // Operadores Relacionais:
    // > - MAIOR.
    // < - MENOR.
    // >= - MAIOR IGUAL.
    // <= - MENOR IGUAL.
    // == IGUAL.
    // === - IGUAL (Tipado - Analisa o tipo do dado, String ou INT, Float).
    // != - DIFERENTE.

    $nome = '';
    $meses = '';
    $salario = '';
    $resultado = '';

    if(isset($_POST['btnEnviar'])){
        $nome = trim($_POST['nome']);
        $meses = trim($_POST['meses']);
        $salario = trim($_POST['salario']);

        // Validação de campos praticando a Experiência do Usuário!
        if($nome == ''){
            echo 'Preenchero campo obrigatório NOME!';
        }else if($meses == ''){
            echo 'Preenchero campo obrigatório MESES!';
        }else if($salario == ''){
            echo 'Preenchero campo obrigatório SALÁRIO!';
        }else{
            $resultado = $meses * $salario;
        }

        // Validação de campos praticando a Performance!
        // if($nome == '' || $meses == '' || $salario == ''){
        //     echo 'Preencher todos os campos obrigatórios!';
        // }else{
        //     $resultado = $meses * $salario;
        // }
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo</title>
</head>
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <form action="exemplo.php" method="POST">
        <label>Digite seu Nome:</label>
        <input type="text" name="nome" value="<?= $nome ?>">
        <br>
        <label>Digite os Meses Trabalhados:</label>
        <input type="number" name="meses" value="<?= $meses ?>">
        <br>
        <label>Digite sua Média Salarial Mensal:</label>
        <input type="text" name="salario" value="<?= $salario ?>">
        <br>
        <button name="btnEnviar">ENVIAR</button>
    </form>
    <span>Resultado Final:</span>
    <input disabled value="R$ <?= number_format($resultado, 2, ',', '.') ?>">
</body>
</html>