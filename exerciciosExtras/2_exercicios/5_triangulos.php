<?php
//Ler 3 números, os possíveis lados de um triângulo, e imprimir a classificação de acordo com tamanho dos lados.

/*
Classificação quanto ao tamanho dos lados
Os triângulos são classificados em três categorias, dependendo da proporção entre o tamanho de suas três arestas (\(a, b, c\)):
    Equilátero: Todos os 3 lados têm medidas iguais (\(a = b = c\)). Todos os ângulos internos também são iguais, medindo sempre 60°.
    
    Isósceles: Possui dois lados com medidas iguais e um diferente. Os ângulos opostos aos lados iguais também são iguais.
    
    Escaleno: Todos os 3 lados possuem medidas diferentes entre si, bem como ângulos internos diferentes
*/

$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];

if (($a + $b > $c) && ($a + $c > $b) && ($b + $c > $a)) {
    if ($a == $b && $b == $c) {
        echo "Equilátero - 3 lados iguais";
    } elseif ($a == $b || $a == $c || $b == $c) {
        echo "Isósceles - 2 lados iguais";
    } else {
        echo "Escaleno - 3 lados diferentes";
    }
} else {
    echo "Os valores informados não formam um triângulo.";
}