<?php 
/*
$names = ["Joaquim", "Carlo", "Bernardo", "Leticia"];

foreach ($names as $name) {
    var_dump($name);
};
*/



$pessoas = [
    "p1" => [
        "Nome" => "Pedro",
        "Idade" => "19",
        "Sexo" => "Masculino",
    ],

    "p2" => [
        "Nome" => "Maria",
        "Idade" => "22",
        "Sexo" => "Feminino",
    ],

    "p3" => [
        "Nome" => "José",
        "Idade" => "99",
        "Sexo" => "Masculino",
    ],
];

//var_dump($pessoas);


//contar sexo, começando de 0
$totM = 0;
foreach ($pessoas as $pessoa) {
    if ($pessoa['Sexo'] === "Masculino") {
        $totM++;
    }
}
echo $totM;    


//mostrar nomes
foreach ($pessoas as $pessoa) {
    echo "Nome: " . $pessoa['Nome'] . "\n";
}








