<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritméticos</title>
    <style>
        h1 {
            font: 20pt Arial bold;
            color: navy;
        }
    </style>
</head>

<body>
    <div>
        <?php
        $n1 = 8;
        $n2 = 7;
        $n3 = 3;

        $soma = $n2 + $n3;
        $subtracao = $n1 - $n3;
        $multiplicacao = $n3 * $n1;
        $divisao = $n2 / $n3;
        $modulo = $n1 % $n2; //resto da divisão 
        $media = ($n2 + $n3) / 2;

        echo "<h1>Testando Operadores Aritméticos</h1> <br/>";
        echo "A soma entre $n2 e $n3 é $soma! <br/>";
        echo "A subtração entre $n1 e $n3 é $subtracao! <br/>";
        echo "A multiplicação entre $n3 e $n1 é $multiplicacao! <br/>";
        echo "A divisão entre $n2 e $n3 é $divisao! <br/>";
        echo "O módulo da divisão entre $n1 e $n2 é $modulo! <br/>";
        echo "A média entre $n2 e $n3 é $media! <br/>";

        /* ORDEM DE PRECEDÊNCIA
            - Parênteses ()
            - Multiplicação *, Divisão / e Módulo %
            - Adição + e Subtração -
        */

        echo "<h1>Testando Funções Aritméticas</h1> <br/>";
        echo "<h3>Declare na URL valores numéricos para X e Y!</h3> <br/>";
        $x = $_GET["x"];
        $y = $_GET["y"];
        echo "Os valores recebidos na URL foram $x e $y! <br/>";
        //Usando o método $_GET, devemos declarar os valores direto na URL, por exemplo -?x=4&y=3

        //TESTANDO FUNÇÕES
        echo "O valor absoluto de $x é " . abs($x) . "! <br/>"; //Valor absoluto, não existem números negativos
        echo "O valor de $x<sup>$y</sup> é " . pow($x, $y) . "! <br/>"; //Elevado à. O <sup> é para mostrar na tela o Y elevado no X
        echo "A raiz quadrada de $x é " . sqrt($x) . "! <br/>"; //Raiz Quadrada
        echo "O valor de $y arredondado é " . round($y) . "! <br/>"; //Arredondamento, existem também as funções ceil() que arredonda tudo para cima, e floor() que arredonda tudo para baixo. Funciona com valores não inteiros
        echo "A parte inteira de $y é " . intval($y) . "! <br/>"; //Valor inteiro da variável
        echo "O valor de $y em moeda é R$" . number_format($y, 2, ",", ".");
        ?>
    </div>
</body>

</html>