<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerando dinamicamente caixas de texto em um formulário usando While</title>
</head>

<body>
    <div>
        <form method="get" action="exercicio2.2.php">
            <?php
            $c = 1;
            while ($c <= 10) {
                echo "valor $c: <input type='number' name='v$c' max='100' min='0' value='0' /><br />";
                $c++;
            }
            ?>
            <input type="submit" value="Enviar" />
        </form>
    </div>
</body>

</html>