<?php
// Na usina de Angra dos Reis, os técnicos analisam a perda de massa de um material radioativo. Sabendo-se que este perde 25% de sua massa a cada 30 segundos, criar um algoritmos que imprima o tempo necessário para que a massa desse material seja menor que 0.10

$massa = $_POST['massa'];
$unidade = $_POST['unidade'];

if ($massa > 0) {
    $tempo_tot = 0;
    $massaInicial = $massa;

    while ($massa >= (0.10)) {
        $massa = $massa * 0.75;
        $tempo_tot += 30;
    }

    $horas = $tempo_tot / 3600;
    $minutos = ($tempo_tot % 3600) / 60;
    $segundos = $tempo_tot % 60;

    echo "Decaimento da massa do matérial radioativo: </br>";
    echo "Massa Inicial: " . number_format($massaInicial, 2, ',', '.') . $unidade;
    echo "</br>Massa Final: " . number_format($massa, 4, ',', '.') . $unidade;
    echo "</br>Tempo necessário: " . sprintf("%02d:%02d:%02d", $horas, $minutos, $segundos);
}


//var_dump($unidade);