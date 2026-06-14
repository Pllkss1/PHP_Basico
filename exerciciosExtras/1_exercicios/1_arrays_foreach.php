<?php

//Com base no seguinte array de carros:
//Crie uma lista que exiba:
//Quantidade de marcas
//Quantidade de veículos
//Quantidade de veículos com base na década de fabricação. Exemplo: 1991 a
//2000, 2001 a 2010 e assim por diante.

$carros = [
    "0" => [
        "Marca" => "Fiat",
        "Modelo" => "Uno",
        "Ano" => 2012,
    ],

    "1" => [
        "Marca" => "VW",
        "Modelo" => "Gol",
        "Ano" => 1998,
    ],

    "2" => [
        "Marca" => "GM",
        "Modelo" => "Onix",
        "Ano" => 2022,
    ],

    "3" => [
        "Marca" => "VW",
        "Modelo" => "Fusca",
        "Ano" => 1970,
    ],

    "4" => [
        "Marca" => "Fiat",
        "Modelo" => "Strada",
        "Ano" => 2015,
    ],

    "5" => [
        "Marca" => "Ford",
        "Modelo" => "Camaro",
        "Ano" => 2002,
    ],

    "6" => [
        "Marca" => "VW",
        "Modelo" => "Brasilia",
        "Ano" => 1985,
    ],

    "7" => [
        "Marca" => "VW",
        "Modelo" => "Kombi",
        "Ano" => 1978,
    ],

    "8" => [
        "Marca" => "VW",
        "Modelo" => "Fusca",
        "Ano" => 1978,
    ],

    "9" => [
        "Marca" => "VW",
        "Modelo" => "Fusca",
        "Ano" => 1988,
    ],

];

//--------------------

$contMarcas = array(); //declarei uma rray
$contModelos = array();
$contAno = array();

foreach ($carros as $carro) {
    if (!in_array($carro["Marca"], $contMarcas)) {
        $contMarcas[] = $carro["Marca"];
    }

    if (!in_array($carro["Modelo"], $contModelos)) {
        $contModelos[] = $carro["Modelo"];
    }

    if (!in_array($carro["Ano"], $contAno)) {
        $contAno[] = $carro["Ano"];
        sort($contAno);
    }
}
echo "Quantidade de Marcas: " . count($contMarcas) . "\n";
echo "Quantidade de Modelos: " . count($contModelos) . "\n";
echo "Ordem de carros por Ano: \n";
var_dump($contAno);

//--------------------