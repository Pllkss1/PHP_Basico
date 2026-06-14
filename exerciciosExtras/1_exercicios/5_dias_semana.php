<?php
//Faça um script que leia um número e exiba o dia correspondente da semana.
//(1-Domingo, 2- Segunda, etc.), se digitar outro valor deve aparecer valor inválido.

$dia = $_POST["diaSemana"];
//var_dump($dia);

switch ($dia) {
    case 1:
        echo "Hoje é Domingo";
        break;
    case 2:
        echo "Hoje é Segunda-Feira";
        break;
    case 3:
        echo "Hoje é Terça-Feira";
        break;
    case 4:
        echo "Hoje é Quarta-Feira";
        break;
    case 5:
        echo "Hoje é Quinta-feira";
        break;
    case 6:
        echo "Hoje é Sexta-feira";
        break;
    case 7:
        echo "Hoje é Sábado";
        break;
    default:
        echo "Digite um número de 1 a 7!";
}
