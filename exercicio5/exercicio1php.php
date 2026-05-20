<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integração HTML5 + PHP</title>
</head>

<body>
    <div>
        <?php
        echo "<h1>Exercício 1 - Raiz Quadrada</h1><br/>";
        $valor = $_GET["v"];
        $rq = sqrt($valor);
        echo "O valor enviado pelo formulário é $valor! <br/>";
        echo "A raiz quadrada de $valor é " . number_format($rq, 2) . "! <br/>";
        ?>
        <a href="exercicio1html.html">Voltar</a>
    </div>
</body>

</html>