<?php
//Construa um formulário que receba três strings (Nome, Nome do Meio, Ultimo Nome) em seguida, retorne para o usuário o nome completo em três formatos:
//Todas as letras minúsculas
//Todas as letras maiúsculas
//A primeira letra de cada palavra Maiúscula
//Junto com o retorno dos itens acima, exiba a data/hora atual no formato dd/mm/YYY H:i:s

$nome = $_POST["nome"];
$meioNome = $_POST["meioNome"];
$sobrenome = $_POST["sobrenome"];

//$completo = [$nome, $meioNome, $sobrenome];
strtoupper($nome);
//echo $nome;

echo "</br> ";
echo "Nome: " . $nome . "</br>";
echo "Nome do Meio: " . $meioNome . "</br>";
echo "Sobrenome: " . $sobrenome . "</br>";
echo "</br> ";

echo "O nome com todas as letras Maiúsculas é " . strtoupper($nome) . " " . strtoupper($meioNome) . " " . strtoupper($sobrenome) . "</br>";
echo "</br> ";

echo "O nome com todas as letras Minúsculas é " . strtolower($nome) . " " . strtolower($meioNome) . " " . strtolower($sobrenome) . "</br>";
echo "</br> ";

echo "O nome com a formatação corrigida é " . ucfirst(strtolower($nome)) . " " . ucfirst(strtolower($meioNome)) . " " . ucfirst(strtolower($sobrenome)) . "</br>";
echo "</br> ";

$data = new DateTime();
echo "E a data e horário atuais são: " . $data->format('d/m/Y H:i:s');


//var_dump($sobrenome);
