<?php
// Criar um algoritmo com uma matriz 5x5 e escreva os elementos da diagonal principal

$ordem = $_POST['ordem'];
//var_dump($ordem);


$matriz = [];

for ($n = 0; $n < $ordem; $n++) {
    for ($m = 0; $m < $ordem; $m++) {
        $matriz[$n][$m] = rand(1, 99);
    }
    echo "</br>";
}
echo "</br>";


for ($n = 0; $n < $ordem; $n++) {
    for ($m = 0; $m < $ordem; $m++) {
        echo $matriz[$n][$m] . " ";
    }
    echo "</br>";
}
echo "</br>";


// A diagonal principal ocorre sempre que o índice da linha ($n) é igual ao da coluna ($m)

echo "Diagonal Principal: </br>";

for ($n = 0; $n < $ordem; $n++) {
    echo $matriz[$n][$n] . " ";
}
