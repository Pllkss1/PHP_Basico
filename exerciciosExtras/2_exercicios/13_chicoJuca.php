<?php
// Chico tem 1,50m e cresce 2 centímetros por ano, enquanto Juca tem 1,10m e cresce 3 centímetros por ano. Construir um algoritmos que calcule e imprima quantos anos serão necessários para que Juca seja maior que Chico

$alturaChico = 150;
$alturaJuca = 110;

$cresceChico = 2;
$cresceJuca = 3;

$anos = 0;

while ($alturaJuca <= $alturaChico) {
    $alturaChico += $cresceChico;
    $alturaJuca += $cresceJuca;
    $anos++;
}

echo "Serão necessários " . $anos . " anos para que Juca seja maior que Chico. \n";
echo "Alturas finais -> Chico: " . ($alturaChico / 100) . "m. E Juca: " . ($alturaJuca / 100) . "m. \n";
