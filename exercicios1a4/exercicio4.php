<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Relacionais</title>
</head>

<body>
    <div>
        <?php
        //OPERADORES RELACIONAIS
        //Como efetuar comparações em PHP?

        /*
            Maior             $a > $b
            Menor             $a < $b
            Maior ou igual    $a >= $b
            Menor ou igual    $a <= $b
            Diferente         $a <> $b  ou  $a != $b
            Igual             $a == $b
            Identico          $a === $b - iguais e do mesmo tipo
        */

        //OPERADOR TERNÁRIO -> ? :
        // expressão?verdadeiro:falso
        // $maior = $a>$b ? $a : $b -> se a for maior que b, $maior recebe o valor de $a, senao $maior recebe o valor de $b
        //Seria o equivalente ao Se/Senao nos algorítmos

        echo "<h1>Exercício 1 - Somar ou Multiplicar dois números</h1><br/>";
        echo "Declare na URL valores para A e B, e S ou M para a variável OP (Soma ou Multiplicação)! <br/>";
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        $tipo = $_GET["op"];
        //Deve-se declarar todas essas 3 variáveis na URL
        echo "Os valores passados na URL foram $n1 e $n2! <br/>";
        $r = ($tipo == "s") ? $n1 + $n2 : $n1 * $n2;
        //Se tipo for igual a S, então $r vai receber a soma, senão $r vai receber a multiplicação
        echo "O resultado será $r <br/>";

        echo "<h1>Exercício 2 - Igual ou Identico</h1><br/>";
        $a = 4;
        $b = "4";
        $r = ($a === $b) ? "SIM" : "NÃO";
        //Aqui testamos os operadores Igual ==, e Identico ===
        echo "As variáveis A e B são iguais? <br/> $r <br/>";

        echo "<h1>Exercício 3 - Cálculo de Média</h1><br/>";
        echo "Declare na URL valores para N1 e N2! <br/>";
        $nota1 = $_GET["n1"];
        $nota2 = $_GET["n2"];
        $m = ($nota1 + $nota2) / 2;
        echo "A média entre $nota1 e $nota2 é $m! <br/>";
        //$sit = ($m > 6) ? "APROVADO" : "REPROVADO";
        //echo "O aluno está $sit! <br/>";
        //Ou, poderiamos remover a variável $sit e concatenar o cálculo direto no echo
        echo "O aluno está " . (($m > 6) ? "APROVADO" : "REPROVADO");

        //OPERADORES LÓGICOS
        /*
        Operador 'E'    and     &&
        Operador 'OU'   or      ||
        Operador 'XOU'  xor     OU exclusivo
        Operador 'NÃO'  not     !
        */

        echo "<h1>Exercício 4 - Eleições</h1><br/>";
        echo "Declare na URL o seu ano de nascimento na variável ANO! <br/>";
        $ano = $_GET["ano"];
        $idade = date('Y') - $ano;
        echo "Quem nasceu em $ano tem $idade anos!<br/>";
        $tipo = ($idade >= 18 && $idade < 65) ? "OBRIGATÓRIO" : "NÃO OBRIGATÓRIO";
        echo "E o voto dessa pessoa é $tipo! <br/>";
        ?>
    </div>
</body>

</html>