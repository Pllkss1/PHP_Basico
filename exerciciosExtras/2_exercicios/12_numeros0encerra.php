<?php
//  Ler vários números e informar quantos números entre 100 e 200 foram digitados. Se o valor 0 for lido encerrar a execução

$numeros = $_POST['numeros'];
//var_dump($numeros);

$tot_validos = 0;
$num_validos = [];

foreach ($numeros as $numero) {
    $num = $numero;

    if ($num == 0) {
        break;
    }

    if ($num >= 100 && $num <= 200) {
        $tot_validos++;
        $num_validos[] = $num;
    }
} //die('aqui');

echo "Total de números entre 100 e 200: " . $tot_validos . "</br>";
echo "</br>";

echo "Lista de números aceitos dentro do intervalo antes do zero: " . "</br>";
if (count($num_validos) > 0) {
    foreach ($num_validos as $n) {
        echo $n . "</br>";
    }
}