<?php
//Construa um formulário onde o usuário digite um número de telefone com o ddd Ex.: 3533631123. Com base no número digitado, retorne separadamente o DDD e o Número para o cliente

$numTel = $_POST["numTel"];
$ddd = substr($numTel, 0, 2); //começa de zero e pega 2 caracteres
$numero = substr($numTel, 2); //começa a partir do terceiro caractere (2, pois começa em 0)

echo "O DDD do seu número é: " . $ddd . "! </br>";
echo "O seu número sem o DDD é: " . $numero . "! </br>";

/*
SINTAXE
substr($texto, $inicio, $comprimento);
$inicio é a posição onde o corte começa, contagem começa no zero, e se usar número negativo ele começa a contar de trás para frente
$comprimento é opcional, quantos caracteres pegar a partir dali
*/





//var_dump($numero);

