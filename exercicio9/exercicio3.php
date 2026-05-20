<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retornando valores, por Valor e por Referência! Aula 15</title>
</head>

<body>
    <div>
        <?php
        echo "<h1>Exercício 1 - Procedimento, passagem de parâmetros por valor e referência</h1><br/>";
        //A passagem de valor por referência usa o & antes da declaração da variável, e isso altera o valor da variável
        function teste($x) // teste(&$x) - isso faz com que altere o valor de $a
        {
            $x += 2;
            echo "O valor de X é $x! <br/>";
        }
        $a = 3;
        teste($a);
        echo "O valor de A é $a! <br/>";
        ?>
    </div>
</body>

</html>