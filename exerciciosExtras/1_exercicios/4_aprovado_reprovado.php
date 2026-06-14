<?php

/*Faça uma página Web que pede duas notas de um aluno. Em seguida ele deve
calcular a média do aluno e dar o seguinte resultado:
    A mensagem "Aprovado", se a média alcançada for maior ou igual a sete;
    A mensagem "Reprovado", se a média for menor do que sete;
    A mensagem "Aprovado com Distinção", se a média for igual a dez.
*/

//$nota1 = readline("Qual a sua primeira nota?: ");
//$nota2 = readline("Qual a sua segunda nota?: ");

$nota1 = $_POST["nota1"];
$nota2 = $_POST["nota2"];

$media = ($nota1 + $nota2) / 2;

if ($media >= 7 && $media < 10) {
    echo "Aprovado com nota " . $media . "!\n";
} elseif ($media < 7) {
    echo "Reprovado com nota " . $media . "!\n";
} elseif ($media == 10) {
    echo "Aprovado com nota máxima " . $media . "!\n";
} else
    echo "Erro \n";

//print_r($media);
