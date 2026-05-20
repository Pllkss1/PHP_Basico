<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções STRING em PHP - Aula 16</title>
</head>

<body>
    <div>
        <?php
        //Strings em PHP é tudo aquilo que está entre aspas ""

        //PRINTF()
        echo "<h1>Exercício 1 - usando a função printf( )!</h1><br/>";
        $p = "Leite";
        $pr = 4.5;
        echo "O $p custa R$ " . number_format($pr, 2) . "<br/>";
        //Ou, usando a função printf()
        printf("O %s custa R$ %.2f", $p, $pr);
        // aqui, o %s significa String, que é o tipo da variável $p
        // e o %f é float, tipo de $pr, o .2 é para dizer que são duas casas decimais 

        /*
        Podemos usar:
        %d - valor decimal (positivo ou negativo)
        %u - valor decimal sem sinal (apenas positivos)
        %f - valor real
        %s - string
        */

        //PRINT_R()
        //A função print_r() serve para mostrar detalhes de uma variável, principalmente se for um vetor - índices
        echo "<h1>Exercício 2 - usando a função print_r( )!</h1><br/>";
        $v[0] = 4;
        $v[1] = 6;
        $v[2] = 7;
        print_r($v);
        echo "<br/>";
        //ou
        $v2 = array(3, 6, 7, 2, 5, 9, 0, 2);
        print_r($v2);
        /*
        Para esse resultado, ao invés de print_r(), podemos usar também as seguintes funções:
        var_dump($x);
        var_export($x);
        */

        //WORDWRAP()
        //A função wordwrap() cria quebras de linha no código
        echo "<h1>Exercício 3 - usando a função wordwrap( )!</h1><br/>";
        $t = "Aqui tem um texto bem grande criado pelo PHP e que vai mostrar o funcionamento da função wordwrap, que é capaz de quebrar linhas!";
        $r = wordwrap($t, 30, "<br/>\n"); // o \n quebra o texto tanto no código em si (f12, para ver o código fonte), quanto na tela visível ao usuário, mas não é necessário
        //Pode-se usar também no final da declaração TRUE ou FALSE para escolher quebrar a palavra se necessário
        echo $r;

        //STRLEN()
        //Capaz de calcular o comprimento de uma String, incluindo espaços 
        echo "<h1>Exercício 4 - usando a função strlen( )!</h1><br/>";
        $txt = "Pedro treinando PHP no Curso em Vídeo!";
        $tamanho = strlen($txt);
        echo "A frase '$txt' da variável txt tem o tamanho de $tamanho caracteres! <br/>";

        //TRIM()
        //Útil para dados vindos de formulários
        echo "<h1>Exercício 5 - usando a função trim( )!</h1><br/>";
        echo "Essa função limpará os espaços desnecessários antes e depois de uma string, por exemplo, se alguém digita espaços antes de escrever o nome em um campo para o nome. <br/>";
        echo "<br/>";
        //$nome = "xxxJoséxdaxSilvaxxx";
        $nome = "   José da Silva   ";
        echo "Quantidade de caracteres da variável nome sem usar o trim é " . (strlen($nome)) . "<br/>";
        $novo = trim($nome);
        echo ($novo) . "<br/>";
        echo "A quantidade de caracteres após o trim é " . (strlen($novo)) . "<br/>";
        echo "<br/>";
        echo "Também temos a função LTRIM() - Left, limpa a esquerda! <br/>";
        echo "Também temos a função RTRIM() - Right, limpa a direita! <br/>";

        //STR_WORD_COUNT()
        //Retorna a quantidade de palavras dentro de uma String
        echo "<h1>Exercício 6 - usando a função str_word_count( )!</h1><br/>";
        $frase = "Eu estou estudando PHP agora!";
        $cont = str_word_count($frase, 0);
        //Os valores aqui podem ser 0, 1 e 2
        // 0 irá contar as palavras
        // 1 irá criar um vetor, onde cada palavra assumirá uma posição
        // 2 irá criar um vetor mantendo o posicionamento de cada palavra dentro da string, cada palavra assume a posição de que começa na string
        echo "A frase '$frase' tem $cont palavras! <br/>";

        //EXPLODE()
        //retorna vetor, escolhe o caractere de separação. Cada palavra coloca em um índice do vetor
        echo "<h1>Exercício 7 - usando a função explode( )!</h1><br/>";
        $site = "Curso em Vídeo";
        $vetor = explode(" ", $site); //dentro das aspas, você coloca o valor que irá buscar e explodir em um vetor, o retorno será um vetor. É o caractere de separação para explodir, no caso foi um espaço em branco
        echo "Essa função explodiu a String '$site' em vetores usando o espaço em branco como caractere de separação! <br/>";
        print_r($vetor);

        //STR_SPLIT()
        //muito parecido com o explode(), porém coloca cada letra em um índice do vetor
        echo "<h1>Exercício 8 - usando a função str_split( )!</h1><br/>";
        $name = "Pedro";
        $vector = str_split($name);
        echo "Essa função coloca cada letra de uma string em um índice diferente de um vetor! <br/>";
        print_r($vector);

        //IMPLODE() ou JOIN()
        //contrário do explode(), irá juntar vetores em uma String
        echo "<h1>Exercício 9 - usando a função implode( ) ou join()!</h1><br/>";
        $ve[0] = "Curso";
        $ve[1] = "em";
        $ve[2] = "Vídeo";
        $text = implode("#", $ve); //entre aspas poderia ser um espaço em branco
        echo $text;
        // join() funciona exatamente da mesma maneira

        // CHR()
        // coloca o código, e irá mostrar qual letra ou número {teclado} é esse código. Mostra qual letra está em determinado código
        echo "<h1>Exercício 10 - usando a função chr()!</h1><br/>";
        $l = 67;
        $letra = chr($l);
        echo "A letra do código '$l' é '$letra'! <br/>";

        //ORD()
        echo "<h1>Exercício 11 - usando a função ord()!</h1><br/>";
        $le = "C";
        $cod = ord($le);
        echo "A letra '$le' tem o código '$cod'! <br/>";
        ?>
    </div>
</body>

</html>