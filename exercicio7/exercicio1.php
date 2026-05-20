<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condições com Switch Case</title>
</head>

<body>
    <div>
        <?php
        $n = isset($_GET["num"]) ? $_GET["num"] : 0;
        $o = isset($_GET["oper"]) ? $_GET["oper"] : 1;

        switch ($o) {
            case 1:
                $r = $n * 2;
                break;
            case 2:
                $r = $n ** 3; //Operador para potenciação é **
                break;
            case 3:
                $r = sqrt($n); // ou $n ^ (0.5); ou $n ^ (1/2);
        }
        echo "O valor de $n com a operação $o tem o resultado: $r! <br/>"
        ?>
        <a href="exercicio1.html">Voltar</a>
    </div>
</body>

</html>