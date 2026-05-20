<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vetores e Matrizes em PHP - Aula 18</title>
</head>

<body>
    <div>
        <pre>
            <table border="1"><tr>
        <?php
        echo "<h1>Testando Vetores e Matrizes!</h1><br/>";
        echo "<h3>Testando array()</h3><br/>";
        $n = array(5, 4, 3, 8, 6, 2);
        $n[] = 7;
        print_r($n); //print_r para mostrar um vetor na tela

        echo "<h3>Testando range()</h3><br/>";
        $c = range(5, 20, 4); //faz um vetor de 5 a 20, contando de 4 em 4 - passo 4
        print_r($c);

        echo "<h3>Testando foreach()</h3><br/>";
        echo "Preciso estudar mais essa função e entender seu funcionamento!";
        foreach ($c as $v) {
            //echo "<td>$v </td>"; //usando a variável acima, e tabela
        }

        echo "<h3>Podemos usar unset($x[x]); para desalocar/excluir elementos de um vetor!</h3><br/>";

        //Chaves Associativas
        echo "<h3>Testando foreach()</h3><br/>";
        $cad = array(
            "nome" => "Ana",
            "idade" => "23",
            "peso" => 78.5
        );
        $cad["fuma"] = true;
        print_r($cad);

        echo "<h3>Em PHP não existem matrizes, e sim o conceito de vetores dentro de vetores que funcionam da mesma forma!</h3><br/>";
        $m = array(
            array(6, 4, 7),
            array(7, 3, 6),
            array(1, 5, 9)
        );
        $m[2][2] = $m[0][1]; //alterou 9(ultima posição) para 4 (primeira linha, segunda posição)
        print_r($m);

        ?>
            </table>
        </pre>
    </div>
</body>

</html>