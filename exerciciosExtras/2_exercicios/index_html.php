<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Segundo PDF de exercícios</title>
</head>
<body>
    <h1>-------------SEGUNDO EXERCÍCIO PHP-------------</br></h1>

    <h2>1 - Digite dois números</br></h2> 
    <form action="1_algoritmo.php" method="POST">
        <label for="num1">Digite o primeiro número: </label>
        <input type="number" id="num1" name="num1"></br>

        <label for="num2">Digite o segundo número: </label>
        <input type="number" id="num2" name="num2"></br>

        <button type="submit">Enviar</button>
    </form>


    <h2>---------------------------------------</h2>
    <h2>2 - Verificar os Divisores</br></h2>
    <form action="2_divisivel.php" method="POST">
        <label for="num">Digite um número: </label>
        <input type="number" id="num" name="num">
        <button type="submit">Perguntar</button>
    </form>


    <h2>---------------------------------------</h2>
    <h2>3 - Aceita ou Não Aceita</br></h2>
    <form action="3_aceita.php" method="POST">
        <label for="nome">Digite seu Nome: </label>
        <input type="text" id="nome" name="nome"></br>

        <label for="sexo">Digite seu Sexo: </label>
        <input type="text" id="sexo" name="sexo" placeholder="F ou M" pattern="[FfMm]"></br>

        <label for="idade">Digite sua Idade: </label>
        <input type="number" id="idade" name="idade"></br>

        <button type="submit">Verificar</button>
    </form>


    <h2>---------------------------------------</h2>
    <h2>4 - Ordem Decrescente</br></h2>
    <form action="4_numeros.php" method="POST">
        <label for="num1">1° </label>
        <input type="number" id="num1" name="num[]">

        <label for="num2">2° </label>
        <input type="number" id="num2" name="num[]"></br>

        <label for="num3">3° </label>
        <input type="number" id="num3" name="num[]">

        <label for="num4">4° </label>
        <input type="number" id="num4" name="num[]"></br>

        <label for="num5">5° </label>
        <input type="number" id="num5" name="num[]">

        <label for="num6">6° </label>
        <input type="number" id="num6" name="num[]"></br>

        <button type="submit">Colocar em Ordem</button>
    </form>

    <h2>---------------------------------------</h2>
    <h2>5 - Triângulos</br></h2>
    <form action="5_triangulos.php" method="POST">
        <label for="a">1° Lado: </label>
        <input type="number" id="a" name="a"></br>

        <label for="b">2° Lado: </label>
        <input type="number" id="b" name="b"></br>

        <label for="c">3° Lado: </label>
        <input type="number" id="c" name="c"></br>

        <button type="submit">Verificar</button>
    </form>


    <h2>---------------------------------------</h2>
    <h2>6 - Biblioteca</br></h2>
    <form action="6_biblioteca.php" method="POST">
        <label for="livro">Digite o nome do livro que você vai emprestar</label></br>
        <input type="text" id="livro" name="livro"></br>
        </br>

        <label for="usuario">Escolha seu Perfil: </label>

            <select id="usuario" name="usuario">
            <option value="" disabled selected>Escolha</option>
            <option value="Professor">Professor</option>
            <option value="Usuário">Usuário</option>
            </select>

        </br>
        </br><button type="submit">Emprestar</button>
    </form>


    

    <h2>---------------------------------------</h2>
    <h2>7 - Digite um número para ver o Produto de 1 até ele mesmo</br></h2>
    <form action="7_produto.php" method="POST">
        <label for="prod"></label>
        <input type="number" id="prod" name="prod">
        <button type="submit">Consultar</button>
    </form>


    <h2>---------------------------------------</h2>
    <h2>8 - Imprimir a paralvra a quantidade de vezes</br></h2>
    <form action="8_palavra.php" method="POST">
        <label for="palavra"></label>
        <input type="text" id="palavra" name="palavra" placeholder="Digite uma Palavra">

        <label for="quant"></label>
        <input type="number" id="quant" name="quant" placeholder="Quantidade de vezes">

        <button type="submit">Gerar</button>
    </form>


    <h2>---------------------------------------</h2>
    <h2>9 - Soma Positivos, Total de Negativos</br></h2>
    <form action="9_20numeros.php" method="POST">
        <?php
        for ($n = 1; $n <= 20; $n++) {
            echo "<label>Número <?= $n ?>: </label>";
            echo "<input type='number' name='numeros[]''></br>";
        } ?>
        <button type="submit">Calcular</button>
    </form>


    <h2>---------------------------------------</h2>
    <h2>10 - Tabuada! Digite o número que deseja ver a tabuada</br></h2>
    <form action="10_tabuada.php" method="POST">
        <label for="num"></form>
        <input type="number" id="num" name="num">
        <button type="submit">Calcular</button>
    </form>


    <h2>---------------------------------------</h2>
    <h2>11 - Escada de Palavra</br></h2>
    <form action="11_palavraMais1.php" method="POST">
        <label for="palavra">Digite uma palavra</label>
        <input type="text" id="palavra" name="palavra">
        <button type="submit">Criar</button>
    </form>


    <h2>---------------------------------------</h2>
    <h2>12 - Números entre 100 e 200</br></h2>
    <h4>Digite alguns números. O zero irá encerrar o programa!</h4></br>
    <form action="12_numeros0encerra.php" method="POST">
        <?php
        for ($n = 1; $n <= 10; $n++) {
            echo "<label>Número <?= $n ?>: </label>";
            echo "<input type='number' name='numeros[]''></br>";
        } ?>
        <button type="submit">Calcular</button>
    </form>


    <h2>---------------------------------------</h2>
    <h2>13 - Chico e Juca, feito em algorítmo sem tela!</br></h2>


    <h2>---------------------------------------</h2>
    <h2>14 - Usina Angra dos Reis</br></h2>
    <form action="14_angraReis.php" method="POST">
        <label for="massa">Digite a Massa do material Radioativo: </label>
        <input type="number" id="massa" name="massa"></br>

        <label for="unidade">Escolha a Unidade de Medida: </label>
            <select id="unidade" name="unidade">
            <option value="" disabled selected>Selecione a Unidade</option>
            <option value="g/s">Gramas (g/s)</option>
            <option value="kg/s">Quilogramas (kg/s)</option>
            </select></br>

        <button type="submit">Calcular</button>
    </form>


    <h2>---------------------------------------</h2>
    <h2>15 - Par ou Ímpar</br></h2>
    <form action="15_parImpar.php" method="POST">
        <?php
        for ($n = 1; ; $n++) {
            if ($n > 8) {
                break;
            }
            echo "<label>Número $n: <input type='number' name='numeros[]'></label></br>";
        }
        ?>
        <button type="submit">Enviar</button>
    </form>


    <h2>---------------------------------------</h2>
    <h2>16 - Maior e Menor</br></h2>
    <form action="16_maiorMenor.php" method="POST">
        <?php
        for ($i = 1; $i <= 20; $i++) {
            echo "<label>Númber $i: <input type='number' name='number[]'></label></br>";
        }
        ?>
        <button type="submit">Seguir</button>
    </form>

    <h2>TUDO FUNCIONANDO ATÉ AQUI!</br></h2>


    <h2>---------------------------------------</h2>
    <h2>17 - Diagonal Principal - Matrizes</br></h2>
    <form action="17_diagonalPrincipal.php" method="POST">
        <label for="ordem">Digite a Ordem que você deseja a sua Matriz: </label></br>
        <input type="number" id="ordem" name="ordem" min="2" max="10" placeholder="2 a 10">
        <button type="submit">Gerar Matriz</button>
    </form>

</body>
</html>