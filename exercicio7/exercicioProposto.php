<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3 Proposto - Estados e Regiões</title>
</head>

<body>
    <div>
        <?php
        $e = $_GET["estado"];
        //echo "$e <br/>";

        switch ($e) {
            case 'am':
            case 'rr':
            case 'ap':
            case 'pa':
            case 'to':
            case 'ro':
            case 'ac':
                $r = "Norte";
                break;
            case 'ma':
            case 'pi':
            case 'ce':
            case 'rn':
            case 'pe':
            case 'pb':
            case 'se':
            case 'al':
            case 'ba':
                $r = "Nordeste";
                break;
            case 'mt':
            case 'ms':
            case 'go':
            case 'df':
                $r = "Centro-Oeste";
                break;
            case 'sp':
            case 'rj':
            case 'es':
            case 'mg':
                $r = "Sudeste";
                break;
            case 'pr':
            case 'rs':
            case 'sc':
                $r = "Sul";
                break;
            default:
                echo "ERRO!";
        }
        echo "Você mora na região $r do Brasil! <br/>";

        if ($e == 'mg') {
            echo "E você mora no Melhor estado do Brasil! <br/>";
        }

        ?>
        <a href="exercicioProposto.html">Voltar</a>
    </div>
</body>

</html>