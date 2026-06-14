<?php
// Criar um algoritmo com uma matriz 5x5 e imprima: toda a matriz, a matriz gerada só com números ímpares e outra só com números pares

$linhas = 5;
$colunas = 5;

$matriz = [];
$mPar = [];
$mImpar = [];

for ($m = 0; $m < $linhas; $m++) {
    for ($n = 0; $n < $colunas; $n++) {
        $num = rand(10, 99);
        $matriz[$m][$n] = $num;

        if ($num % 2 == 0) {
            $mPar[$m][$n] = $num;
            $mImpar[$m][$n] = '-';
        } else {
            $mPar[$m][$n] = '-';
            $mImpar[$m][$n] = $num;
        }
    }
}


function imprimeMatriz($titulo, $matriz) {
    echo "\n=== $titulo ===\n";
    foreach ($matriz as $linha) {
        foreach ($linha as $elemento) {
            echo str_pad($elemento, 3, " ", STR_PAD_LEFT);
        }
        echo "\n";
    }
}

imprimeMatriz("Original", $matriz);
imprimeMatriz("Pares", $mPar);
imprimeMatriz("Impares", $mImpar);