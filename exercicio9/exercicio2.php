<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rotinas com Multiplos Parâmetros em PHP - Aula 14</title>
</head>

<body>
    <div>
        <?php
        /*
        Parâmetros Dinâmicos
        função func_get_args(); - Pega todos os argumentos e coloca dentro de um vetor
        função func_num_args(); - Vai retornar o número de argumentos que foi passado
        */

        function soma()
        {
            $p = func_get_args();
            $t = func_num_args();
            $s = 0;
            for ($i = 0; $i <= $t; $i++) {
                $s += $p[$i];
            }
            return $s;
        }

        $r = soma(3, 5, 8, 5, 7, 32, 1);
        echo "A soma dos valores é $r! <br/>";
        ?>
    </div>
</body>

</html>