<?php
//Entrar com nome, sexo e idade de uma pessoa. Se a pessoa for do sexo feminino e tiver menos que 25 anos, imprimir nome e a mensagem: ACEITA. Caso contrário, imprimir nome e a mensagem: NÃO ACEITA.

$nome = $_POST["nome"];
$sexo = $_POST["sexo"];
$idade = $_POST["idade"];

if ($sexo == "F" | $sexo == "f" && $idade <= 25) {
    echo "Aceita";
} else {
    echo "Não Aceita";
}