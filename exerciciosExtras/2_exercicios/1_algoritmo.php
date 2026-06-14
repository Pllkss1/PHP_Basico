<?php
// Construir um algoritmo que leia 2 números e efetue a adição. Caso o valor somado seja maior que 20, este deverá ser apresentando somando-se a ele mais 8; caso o valor somado seja menor ou igual a 20, este deverá ser apresentado subtraindo-se 5.

$num1 = $_POST["num1"];
$num2 = $_POST["num2"];
$adicao = $num1 + $num2;

if ($adicao > 20) {
    $adicao += 8;
    echo $adicao;
} elseif ($adicao <= 20) {
    $adicao -= 5;
    echo $adicao;
}

?>