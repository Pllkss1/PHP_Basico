<?php
// Armazenar 15 números inteiros em um vetor e imprimir uma mensagem contendo o número e uma das mensagens: par ou ímpar

$vetor = $_POST['numeros'];

foreach ($vetor as $num) {
    $valor = intval($num);

    if ($valor % 2 == 0) {
        $retorno = "par";
    } else {
        $retorno = "ímpar";
    }
    echo "O número " . $valor . " é " . $retorno . "</br>";
}