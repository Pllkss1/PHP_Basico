<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura condicional IF</title>
</head>

<body>
    <div>
        <?php
        $a = isset($_GET["ano"]) ? $_GET["ano"] : 1900;
        $i = date("Y") - $a;
        echo "Você nasceu em $a e tem $i anos! <br/>";
        /* 
        if ($i >= 18) {
            $v = "já pode votar";
            $d = "já pode dirigir";
        } else {
            $v = "não pode votar";
            $d = "não pode dirigir";
        }
        echo "Com essa idade você $v e $d!";
        */

        /* Ou usando estruturas condicionais
        if ($i < 16) {
            $tipoVoto = "você não vota";
        } 
        else {
            if (($i >= 16 && $i < 18) || ($i > 65)) {
                $tipoVoto = "o seu voto é opcional";
            } else {
                $tipoVoto = "o seu voto é obrigatório";
            }
        }
        echo "Com essa idade, $tipoVoto! <br/>";
        */

        // Ou usando elseif
        if ($i < 16) {
            $tipoVoto = "você não vota";
        } elseif (($i >= 16 && $i < 18) || ($i > 65)) {
            $tipoVoto = "o seu voto é opcional";
        } else {
            $tipoVoto = "o seu voto é obrigatório";
        }
        echo "Com essa idade, $tipoVoto! <br/>";

        ?>
    </div>
</body>

</html>