<?php
/*
Construa um array contendo todos os meses do ano, neste array, a chave de referência deve ser 01 para janeiro, 02 para fevereiro e assim por diante até chegar o mês de Dezembro.
Solicite ao usuário digitar um numero de 1 a 12 e com base na escolha, exiba o mês correspondente com base no array criado.
Obs. O número digitado pelo usuário não deve conter o 0 (zero) no início.
*/

$digitado = $_POST['numMes'];
$meses = [
    "01" => "Janeiro",
    "02" => "Fevereiro",
    "03" => "Março",
    "04" => "Abril",
    "05" => "Maio",
    "06" => "Junho",
    "07" => "Julho",
    "08" => "Agosto",
    "09" => "Setembro",
    "10" => "Outubro",
    "11" => "Novembro",
    "12" => "Dezembro"
];

$mes = sprintf("%02d", $digitado); //adiciona o 0 antes dos números de 1 a 9
$chave = array_key_exists($mes, $meses);
//var_dump($chave);
echo "O mês referente ao número digitado é: " . $meses[$mes] . "! </br>";



//if(in_array($digitado, $meses, true)) {
    //die('aqui');
//}

/*
if ($digitado == $meses['']) {
    die("Aqui");
}
*/