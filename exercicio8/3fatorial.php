<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 12 - Calculando o Fatorial de um número!</title>
</head>

<body>
    <div>
        <?php
        $v = isset($_GET["val"]) ? $_GET["val"] : 1;
        echo "<h2>Calculando o fatorial de $v</h2><br/>";
        $c = $v;
        $fat = 1;
        do {
            $fat *= $c;
            $c--;
        } while ($c >= 1);
        echo "<h3>$v ! = $fat</h3><br/>";
        ?>
        <a href="exercicio3.php">Voltar</a>
    </div>
</body>

</html>