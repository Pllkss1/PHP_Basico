<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções STRING em PHP - Aula 17</title>
</head>

<body>
    <div>
        <?php
        //STRTOLOWER()
        //Deixa todas as letras em minusculo
        echo "<h1>Exercício 1 - usando a função strtolower( )!</h1><br/>";
        $nome = "pedro LuCas";
        echo "Meu nome é " . strtolower($nome);

        //STRTOUPPER()
        //Deixa todas as letras em maiúsculo
        echo "<h1>Exercício 2 - usando a função strtoupper( )!</h1><br/>";
        echo "Meu nome é " . strtoupper($nome);

        //UCFIRST() - UC = Upper Case
        //Coloca a primeira letra em maiúsculo, somente a primeira letra de toda a frase
        echo "<h1>Exercício 3 - usando a função ucfirst( )!</h1><br/>";
        echo "Meu nome é " . ucfirst(strtolower($nome));

        //UCWORDS()
        //Coloca a primeira letra de cada 'nome' ou palavra da frase em maiúsculo
        echo "<h1>Exercício 4 - usando a função ucwords( )!</h1><br/>";
        echo "Meu nome é " . ucwords($nome);

        //STRREV()
        //Mostra o reverso da palavra ou frase
        echo "<h1>Exercício 5 - usando a função strrev( )!</h1><br/>";
        echo "Meu nome ao contrário é " . strrev($nome);

        //STRPOS() e STRIPOS()
        //serve para encontrar a posição de uma string em uma frase 
        //O i é de ignore, ele ignora a caixa maiúscula e minúscula e busca a string 
        echo "<h1>Exercício 6 - usando as funções strpos( ) e stripos()!</h1><br/>";
        $frase = "Estou estudando PHP agora!";
        $pos = strpos($frase, "PHP"); //Vai buscar a posição da string PHP na frase
        echo "A frase '$frase' tem a string PHP na posição $pos! <br/>";

        //SUBSTR_COUNT()
        //Mostra quantas vezes uma string aparece dentro da frase 
        echo "<h1>Exercício 7 - usando a função substr_count( )!</h1><br/>";
        $frase2 = "Estou estudando PHP no curso em vídeo de PHP básico!";
        $cont = substr_count($frase2, "PHP");
        echo "A string PHP foi encontrada $cont vezes na frase '$frase2'<br/>";

        //SUBSTR()
        //Possui vários parâmetros e várias maneiras de utilizá-los para tratamento de Strings

        //STR_PAD()
        //faz uma string caber em um determinado espaço, por exemplo, faz uma pavra com 5 caracteres caber em um espaço para 30 caracteres completando o restante do espaço com espaços ou o caractere de sua preferência 
        /*
        pode usar:
        str_pad_right()
        str_pad_center() - preenche os espaços mantendo a palavra no centro
        str_pad_left()
        */

        //STR_REPEAT()
        //Repete a palavra a qunatidade de vezes predefinida - ÚTIL
        //str_repeat(-, 20); faz linha/separação

        //STR_REPLACE()
        //Substitui uma palavra por outra na frase - ÚTIL
        //pode usar o i de ignore para ignorar a caixa de letras, str_ireplace()




        ?>
    </div>
</body>

</html>