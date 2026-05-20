<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vetores e Matrizes em PHP - Aula 19</title>
</head>

<body>
    <div>
        <pre>
        <?php
        echo "<h1>Exibindo valores de Matrizes com print_r() e com var_dump()!</h1><br/>";
        $v = array("B", "U", "P", "Y", "V");
        echo "<h3>Usando print_r()!</h3><br/>";
        print_r($v);
        echo "<h3>Usando var_dump()!</h3><br/>";
        var_dump($v);

        /*
        incluir valores no final
            array_push()
        excluir valores no final
            arrya_pop()
        incluir valores no início
            array_unshift()
        excluir valores do início
            array_shift()
        */

        echo "<h1>Ordenar vetores usando sort(), rsort(), asort(), arsort() e ksort()!</h1><br/>";
        //r de reverse, mostra ao contrário
        //a de associativo
        //k de key, meche somente nos indices, não meche nos valores
        sort($v);
        print_r($v);

        rsort($v);
        print_r($v);

        asort($v);
        print_r($v);

        arsort($v);
        print_r($v);

        ksort($v); //krsort()
        print_r($v);

        ?>
        </pre>
    </div>
</body>

</html>