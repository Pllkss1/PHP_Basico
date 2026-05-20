<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerando dinamicamente caixas de texto em um formulário usando While</title>
</head>

<body>
    <div>
        <?php
        $c = 1;
        while ($c <= 10) {
            $v = "num" . $c;
            $url = "v" . $c;
            $$v = isset($_GET["$url"]) ? $_GET["$url"] : 0;
            $c++;
        }

        $c = 1;
        while ($c <= 10) {
            $v = "num" . $c;
            echo "valor $c: " . $$v . "<br/>";
            $c++;
        }

        ?>
    </div>
</body>

</html>