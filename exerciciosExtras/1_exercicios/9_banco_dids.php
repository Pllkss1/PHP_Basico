<?php
//var_dump(HOST);die();
/*
Suponhamos que temos uma Tabela no banco de dados com o Nome de “dids”
com os campos:
Número
DDD
Operadora
Com base em um arquivo do Tipo CSV que contém uma lista de números (Um
número por linha)
Ex.:
3533631123
47988887777
2130904120
Crie um script que percorra este arquivo e no final imprima a instrução em SQL
para a Inserção destes dados na Tabela.
Informações:
O Número que está no CSV está no formato ddd + numero
O Identificador da operadora é o ID 1009
*/

require_once 'define.php';

//conexão com o banco
//$acesso = 'define.php';
$connect = mysqli_connect(
    HOST,
    USERDB, 
    PASSDB,
    DBNAME,
); 

if (!$connect) {
    die("Não conectou: " . mysqli_connect_error());
}
echo "Conectado!";

//arquivo CSV
$arquivoCSV = fopen("dids.csv", "r");
//var_dump(file_exists($arquivoCSV));

while (($linha = fgetcsv($arquivoCSV)) !== false) {
    //print_r($linha);
    $numero = $linha[0];
    $operadora = $linha[1];
    $tenant = $linha[2];

    $ddd = substr($numero, 0, 2);

    $sql = "INSERT INTO dids (numero, ddd, operadora, tenant) VALUES ('$numero', '$ddd', '$operadora', '$tenant');";

    echo $sql . PHP_EOL;

    mysqli_query($connect, $sql);
}

fclose($arquivoCSV);

mysqli_close($connect);














