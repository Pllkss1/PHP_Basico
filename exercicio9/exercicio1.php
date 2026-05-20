<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rotinas em PHP - Procedimentos e Funções</title>
</head>

<body>
    <div>
        <?php
        // Criar um procedimento que some dois valores inteiros 
        // PROCEDIMENTOS são Funções que não retornam valor, usa-se echo

        echo "<h1>Exercício 1 - Procediemntos</h1><br/>";
        function soma($a, $b)
        {
            $s = $a + $b;
            echo "<p>A soma vale $s!</p> <br/>";
        }
        soma(3, 4);
        soma(8, 15);
        soma(34, 82);
        $x = 9;
        $y = 24;
        soma($x, $y);

        //FUNCÇÕES tendo valor de retorno, usa-se Return

        echo "<h1>Exercício 2 - Funções</h1><br/>";
        function soma2($c, $d)
        {
            $r = $c + $d;
            return $r;
        }
        $g = 9;
        $h = 6;
        $j = soma2($g, $h);
        echo "A soma entre $g e $h é igual a $j! <br/>";
        ?>
    </div>
</body>

</html>