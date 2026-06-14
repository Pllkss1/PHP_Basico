<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadors de Atribuição</title>
</head>

<body>
    <div>
        <?php
        //$a = 5;
        //$b = 9;

        //$c = $a + $b;
        //Se a variável C estiver em ambos os lados, podemos usar as seguintes estruturas e ter o mesmo resultado
        //$c = $c + 5;
        //Ou
        //$c += 5;
        //Ou o Operador de incremento, onde se a variável for receber ela mesma, mais 1, podemos usar a++; para adicioar 1, ou a--; para remover 1
        //$c++;
        //echo $c;

        /* OPERADORES DE ATRIBUIÇÃO
        ADIÇÃO          $a = $a + $b    $a += $b
        SUBTRAÇÃO       $a = $a - $b    $a -= $b
        MULTIPLICAÇÃO   $a = $a * $b    $a *= $b
        DIVISÃO         $a = $a / $b    $a /= $b
        MÓDULO          $a = $a % $b    $a %= $b
        CONCATENAÇÃO    $a = $a . $b    $a .= $b
        */


        echo "<h1>Exercício 1 - Operadores de atribuição</h1>";
        echo "Declare na URL um valor para P! <br/>";
        $preco = $_GET["p"];
        echo "O preço do produto é R$" . number_format($preco, 2, ",", ".") . "! <br/>";
        $preco += $preco * 10 / 100;
        echo "O preço com 10% de aumento é R$" . number_format($preco, 2, ",", ".") . "! <br/>";

        /* OPERADORES DE INCREMENTO
        Pré-incremento      $a = $a + 1     ++$a
        Pós-incremento      $a = $a + 1     $a++
        Pré-decremento      $a = $a - 1     --$a
        Pós-decremento      $a = $a - 1     $a--
        */

        echo "<h1>Exercício 2 - Operadores de incremento</h1>";
        $atual = date('Y');
        echo "O ano atual é $atual e o ano anterior é " . --$atual . "! <br/>";

        //VARIÁVEIS REFERENCIADAS - &
        echo "<h1>Exercício 3 - Variáveis Referenciadas</h1><br/>";
        $a = 3;
        $b = &$a; // usar & antes da variável para referenciar 
        $b += 5;
        echo "A variável A vale $a <br/>";
        echo "A variável B vale $b <br/>";

        //VARIÁVEIS DE VARIÁVEIS - $
        echo "<h1>Exercício 4 - Variáveis de variáveis</h1><br/>";
        $x = "abc";
        $$x = "def";
        echo "O conteúdo da variável X é $x! <br/>";
        echo "A variável da variável X recebe o nome do valor atribuído a variável X, com o contéudo $abc! <br/>";
        ?>
    </div>
</body>

</html>