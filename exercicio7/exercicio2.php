<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dias da semana com Switch/Case</title>
</head>

<body>
    <div>
        <?php
        $d = isset($_GET["ds"]) ? $_GET["ds"] : 2;
        switch ($d) {
            case 2:
            case 3:
            case 4:
            case 5:
            case 6:
                echo "Vagabundo pobre, vai trabalhar!";
                break;
            case 7:
            case 8:
                echo "Vagabundo, precisa estudar! Dormir e descansar pra que?";
                break;
            default:
                echo "Digite um dia da semana válido!";
        }
        ?>
        <br /><a href="exercicio2.html">Voltar</a>
    </div>
</body>

</html>