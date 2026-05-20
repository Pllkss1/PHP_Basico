<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2 Integração HTML + PHP</title>
</head>

<body>
    <div>
        <h1>Exercício 2</h1><br />
        <?php
        //seguindo a seguinte extrutura, mesmo se não colocar valores na URL, vai mostrar um valor 
        $nome = isset($_GET["nome"]) ? $_GET["nome"] : "[Não Informado]";
        $ano = isset($_GET["ano"]) ? $_GET["ano"] : 0;
        $sexo = isset($_GET["sexo"]) ? $_GET["sexo"] : "[Não Binárie]";
        $idade = date('Y') - $ano;
        echo "$nome é $sexo e tem $idade anos! <br/>";
        ?>
        <a href="exercicio2html.html">Voltar</a>
    </div>
</body>

</html>