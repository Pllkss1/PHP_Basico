<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura de repetição While</title>
</head>

<body>
    <div>
        <?php
        //Teste lógico no início - aula 11
        //ENQUANTO

        //Mostrar contagem de 1 a 10
        echo "<h1>Mostrando contagem progressiva usando While: </h1><br/>";
        $c = 1;
        while ($c <= 10) {
            echo $c . "<br/>";
            $c++;
        }

        echo "<h1>Mostrando contagem regressiva usando While: </h1><br/>";
        $d = 10;
        while ($d >= 1) {
            echo $d . "<br/>";
            $d--;
        }

        echo "<h1>Mostrando contagem personalizada: </h1><br/>";
        $e = 20;
        while ($e >= 0) {
            echo $e . "<br/>";
            $e -= 2;
        }

        //Teste lógico no final - aula 12 
        //REPITA
        // usando o laço DO-WHILE
        echo "<h1>Mostrando contagem progressiva usando Do While: </h1><br/>";
        $f = 1;
        do {
            echo $f . "<br/>";
            $f++;
        } while ($f <= 10);

        //Teste com a terceira estrutura de repetição
        //PARA
        echo "<h1>Mostrando contagem progressiva e regressiva usando For: </h1><br/>";
        for ($g = 1; $g <= 10; $g++) {
            echo "$g <br/>";
        }
        echo "<br/>";
        for ($g = 10; $g >= 1; $g--) {
            echo "$g <br/>";
        }
        ?>
    </div>
</body>

</html>