<?php
//Entrar com 3 números e imprimi-los em ordem decrescente (suponha números diferentes)

$num = $_POST['num'] ?? [];

rsort($num);

foreach ($num as $n) {
    echo $n . "</br>";
}


//var_dump($num);