<?php
/*
Criar um algoritmos que entre com uma
palavra e imprima conforme o exemplo
◦ Palavra: sonho
◦ SONHO
◦ SONHO SONHO
◦ SONHO SONHO SONHO
◦ SONHO SONHO SONHO SONHO 
*/

$palavra = $_POST['palavra'];
//var_dump($palavra);

for ($p= 1; $p <= 10; $p++) {
    echo str_repeat($palavra . " ", $p) . "</br>";
}