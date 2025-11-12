<?php

    // Arquivo de Função, da camada Back-End.
    function ExemploSomar($numero1, $numero2){
        if($numero1 == '' || $numero2 == ''){
            return 0;
        }else{
            $soma = $numero1 + $numero2;

            return $soma;
        }
    }

    function ValidarNome($nome){
        if(strlen($nome) < 3){
            return -1;
        }
    }

    function ValidarDescricao($info){
        if(strlen($info) < 50){
            return -2;
        }
    }
    
    function ValidarSenha($senha){
        if(strlen($senha) < 6 || strlen($senha) > 8){
            return -3;
        }
    }

    function CompararSenhas($senha, $repSenha){
        if($senha != $repSenha){
            return -4;
        }
    }

    function SomarSalario($dinheiro, $bonus){
        if($dinheiro == '' || $bonus == ''){
            return 0;
        }else{
            $resultado = $dinheiro + (($dinheiro * $bonus) / 100);

            return $resultado;
        }
    }

    function CalcularValores($valor1, $valor2, $valor3, $valor4, $valor5){
        if($valor1 == '' || $valor2 == '' || $valor3 == '' || $valor4 == '' || $valor5 == ''){
            return 0;
        }else{
            $calculo = $valor1 + $valor2 + $valor3 + ($valor4 * $valor5);

            return $calculo;
        }
    }

    function SomarMeses($jan, $fev, $mar, $abr, $mai, $jun, $jul, $ago, $set, $out, $nov, $dez){
        if($jan == '' || $fev == '' || $mar == '' || $abr == '' || $mai == '' || $jun == '' || $jul == '' || $ago == '' || $set == '' || $out == '' || $nov == '' || $dez == ''){
            return 0;
        }else{
            $soma = $jan + $fev + $mar + $abr + $mai + $jun + $jul + $ago + $set + $out + $nov + $dez;

            return $soma;
        }
    }

    function CalcularValorProduto($nome, $valor, $volume){
        if($nome == '' || $valor == '' || $volume == ''){
            return 0;
        }else{
            $calculo = $valor * $volume;

            return $calculo;
        }
    }

    function CalcularExercicio($num1, $num2, $num3, $num4, $num5, $num6, $num7, $num8, $num9, $num10){
        if($num1 == '' || $num2 == '' || $num3 == '' || $num4 == '' || $num5 == '' || $num6 == '' || $num7 == '' || $num8 == '' || $num9 == '' || $num10 == ''){
            return 0;
        }else{
            $resultado = ($num1 + $num2 + $num3 + $num4 + $num5 + $num6 + $num7 + $num8 + $num9) / $num10;

            return $resultado;
        }
    }