<?php
// Criar um algoritmos que leia um número e imprima todos os número de 1 até ele e o seu produto.

$prod = $_POST['prod'];
//var_dump($prod);

$produto = 1;

for ($p = 1; $p <= $prod; $p++) {
    echo $p . " ";
    $produto *= $p;
}

echo "</br>Produto: " . $produto;