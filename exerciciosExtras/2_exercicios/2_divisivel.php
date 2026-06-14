<?php
// Entrar com um número e informar se ele é divisível por 10, por 5, por 2 ou se não é divisível por nenhum destes.

$num = $_POST["num"];

$div10 = ($num % 10 === 0);
$div5 = ($num % 5 === 0);
$div2 = ($num % 2 === 0);

if ($div10) {
    echo "O número " . $num . " é divisível por 10! </br>";
} 
if ($div5) {
    echo "O número " . $num . " é divisível por 5! </br>";
} 
if ($div2) {
    echo "O número " . $num . " é divisível por 2! </br>";
} 
if ($num % 10 !== 0 && $num % 5 !== 0 && $num % 2 !== 0) {
    echo "O número " . $num . " não é divisível por 10, nem por 5, nem 2!";
}