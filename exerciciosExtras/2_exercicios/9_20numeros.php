<?php
// Entrar com 20 números e imprimir a soma dos positivos e o total de números negativos

$numeros = $_POST['numeros'];
//var_dump($numeros);

$somaPositivos = 0;
$totalNegativos =0;

foreach ($numeros as $num) {
    $num = floatval($num);

    if ($num > 0) {
        $somaPositivos += $num;
    } elseif ($num < 0) {
        $totalNegativos ++;
    }
}

echo "<h4>Resultados: </h4></br>";
echo "Soma dos números positivos: " . number_format($somaPositivos, 2, ',', '.') . "</br>";
echo "Total de números negativos: " . $totalNegativos . "</br>";
