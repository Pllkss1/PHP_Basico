<?php
//  Criar um vetor com 20 elementos inteiros. Imprimir o maior e o menor, sem ordenar, o percentual de números par e média dos elementos do vetor

$number = $_POST['number'];
//var_dump($number);

echo "<pre>";
print_r($number);
echo "</pre>"; //die('aqui');

$maior = max($number);
$menor = min($number);

echo "Maior: " . $maior . "</br>";
echo "Menor: " . $menor . "</br>";

$soma = 0;
$pares = 0;
$total = count($number);

foreach ($number as $n) {
    $soma += $n;
    if ($n % 2 == 0) {
        $pares++;
    }
}

$media = $soma / $total;
$percentualPares = ($pares / $total) * 100;

echo "Média: " . number_format($media, 2, ',', '.') . "</br>";
echo "Percentual de Pares: " . number_format($percentualPares, 2, ',', '.') . "%</br>";