<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio Proposto</title>
</head>

<body>
    <div>
        <?php
        /* Esse exercício irá ler duas ou mais notas, calcular a média e mostrar se o aluno está Aprovado, de Recuperação, ou Reprovado.
        Se tirar a média entre 0 e 5, está reprovado.
        Se a média for igual ou maior que 5 até 7, está de recuperação.
        Se a média for maior que 7 até 10 está aprovado.
        */
        echo "<h1>A sua média e situalção é:</h1><br/>";
        $n1 = $_GET["n1"];
        $n2 = $_GET["n2"];
        $n3 = $_GET["n3"];

        $m = ($n1 + $n2 + $n3) / 3;
        echo "Você informou as notas $n1, $n2 e $n3! A sua nota média é $m! <br/>";

        if ($m >= 7 && $m < 10) {
            $final = "aprovado";
        } elseif ($m >= 5 && $m < 7) {
            $final = "de recuperação";
        } else {
            $final = "reprovado";
        }

        echo "Com essa nota, você está $final! <br/>";

        ?>
        <a href="exercicioProposto.html">Voltar</a>
    </div>
</body>

</html>