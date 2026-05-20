<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4 - Tabuada usando FOR</title>
</head>

<body>
    <div>
        <form method="get" action="4tabuada.php">
            <select name="num">
                <?php
                for ($c = 1; $c <= 10; $c++) {
                    echo "<option>$c</option>";
                }
                ?>
            </select>
            <input type="submit" value="Tabuada" />
        </form>
    </div>
</body>

</html>