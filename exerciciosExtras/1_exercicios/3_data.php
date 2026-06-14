<?php

//Com base em uma data digitada pelo usuário. Exiba separadamente o dia, mes e ano.

//explode()
//DateTime

$nascimento = new DateTime($_POST["nascimento"]);
$nascimento->format('d/m/Y');
echo "Dia: " . $nascimento->format('d') . "</br>";
echo "Mês: " . $nascimento->format('m') . "</br>";
echo "Ano: " . $nascimento->format('Y') . "</br>";

//$nascimento = readline("Qual a sua data de nascimento?: \n");
//echo $nascimento->format('d/m/Y');
//var_dump($nascimento); // . "\n";
//die();

/*
$separar = explode('/', $nascimento);
$mes = $separar[0];
$dia = $separar[1];
$ano = $separar[2];
echo "Dia: " . $dia . "\n";
echo "Mês: " . $mes . "\n";
echo "Ano: " . $ano . "\n";

//var_dump($separar);
//die();

/*
$partes = array("dia", "mes", "ano");
//var_dump($partes);


if (!empty($nascimento)) {
    $partes[] = explode('/', $nascimento);
    $dia = $partes[0];
    $mes = $partes[1];
    die("Aqui");
    $ano = $partes[2];

    echo "Dia: " . $nascimento;
}

//var_dump($nascimento);
*/




/*
$dia = date('d');
//$mes;
//$ano;
var_dump($dia);
*/