<?php
//Criar um algoritmos que imprima a tabuada de um número

$num = $_POST['num'];
//var_dump($num);

for ($t = 1; $t <= 10; $t++) {
    $result = $num * $t;
    echo $num . " x " . $t . " = " . $result . "</br>";
}

