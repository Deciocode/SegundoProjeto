<?php

    // Formas de Trabalhar com uma Variável de Tipo Array.

    // $variavel = array('0', '1', '2', '3', '4');
    $carros = array('Fusca', 'Chevette', 'Opala', 'D20', '325i');

    $cores = array();

    $cores[] = 'Vermelho'; // 0 Posição.
    $cores[] = 'Azul'; // 1 Posição.
    $cores[] = 'Prata'; // 2 Posição.
    $cores[] = 'Amarelo'; // 3 Posição.
    $cores[] = 'Verde'; // 4 Posição.

    echo '<hr>';

    print_r($carros);

    echo '<hr>';

    echo '<pre>';
    print_r($carros);
    echo '</pre><hr>';

    var_dump($cores);

    echo '<hr>';

    echo '<pre>';
    var_dump($cores);
    echo '</pre><hr>';

    for($i=0; $i < count($carros); $i++){
        echo 'O Veículo guardado na posição ' . $i . ' é ' . $carros[$i] . '.<br>';
    }

    echo '<hr>';

    for($i=0; $i < count($cores); $i++){
        echo 'A Cor guardada na posição ' . $i . ' é ' . $cores[$i] . '.<br>';
    }

    echo '<hr><span>Junção de Resultados de Arrays.</span>';

    for($i=0; $i < count($carros); $i++){
        echo 'O Veículo guardado na posição ' . $i . ' é ' . $carros[$i] . ' ' . $cores[3] . '.<br>';
    }

    echo '<hr>';

    for($i=2; $i < 3; $i++){
        echo 'O Veículo guardado na posição ' . $i . ' é ' . $carros[2] . ' ' . $cores[2] . '.<br>';
    }