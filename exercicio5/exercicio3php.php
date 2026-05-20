<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $txt = isset($_GET["t"]) ? $_GET["t"] : "Qualquer coisa";
    $tam = isset($_GET["tam"]) ? $_GET["tam"] : "15pt";
    $cor = isset($_GET["cor"]) ? $_GET["cor"] : "#18d83e";
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3 - Personalizar um texto através de um formulário</title>
    <style>
        span.texto {
            font-size: <?php echo $tam; ?>;
            color: <?php echo $cor; ?>;
        }
    </style>
</head>

<body>
    <div>
        <h1>Exercício 3 - Personalizar um texto através de um formulário</h1><br />
        <?php
        echo "<span class='texto'>$txt</span>";
        ?>
    </div>
</body>

</html>