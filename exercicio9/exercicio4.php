<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rotinas externas em PHP - Aula 15</title>
</head>

<body>
    <div>
        <?php
        /*
        INCLUDE - incluir outros arquivos
        REQUIRE - requirido, o código não vai rodar sem o arquivo requirido 
        INCLUDE_ONCE - incluir apenas uma vez...
        REQUIRE_ONCE - requerir apenas uma vez, pois podemos usar várias vezes dentro de um mesmo script, e com essa opção, ele irá carregar o código externo apenas uma vez e usar quantas vezes for necessário (se não usar ONCE irá carregar o arquivo toda vez que for chamado)
        */

        include "funcaoTeste.php";
        echo "<h1>Testando o uso de Funções no PHP!</h1><br/>";
        ola();
        mostraValor(56);
        ?>
    </div>
</body>

</html>