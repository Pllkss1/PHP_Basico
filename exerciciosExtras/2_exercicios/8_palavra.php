<?php
//Entrar com o número de vezes que se deseja imprimir a palavra SOL, e imprimir

$palavra = $_POST['palavra'];
$quant = $_POST['quant'];

/*
echo "<pre>";
var_dump($palavra);
var_dump($quant);
echo "</pre>";
*/

for ($q = 1; $q <= $quant; $q++) {
    echo "<div>$palavra</div>";
}