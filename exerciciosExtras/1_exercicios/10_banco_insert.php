<?php
/*
Crie em banco de dados simples com a tabela usuarios contendo os seguintes
campos:
Id,
nome,
email,
telefone
Popule este banco com alguns informações fictícias e na sequência faça um
script que se conecte ao banco e exiba a lista com os usuários cadastrados.
—
Utilizando o mesmo banco, faça um script que realize a inserção de um novo
registro no banco de dados com base em um formulário html.
*/

//file_get_contents() ou fgets()


//CONEXÃO COM O BANCO
require_once ('define.php');
$conect = mysqli_connect(
    HOST,
    USERDB,
    PASSDB,
    DBNAME,
);

if (!$conect) {
    die("Não conectou: " . mysqli_connect_error());
} else {
    echo "Conectado \n";
}
//var_dump($conect);
//print_r($conect);

//-----------------------------------
//VERIFICANDO SE EXISTE DADOS NO FORMULÁRIO HTML PARA INSERÇÃO NO BANCO ANTES DE FAZER A CONSULTA, SE HOUVER, FAZ A INSERÇÃO, SE NÃO HOUVER VAI PARA A CONSULTA

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $conect->real_escape_string($_POST['nome']);
    $email = $conect->real_escape_string($_POST['email']);
    $telefone = $conect->real_escape_string($_POST['telefone']);

    if (!empty($nome) && !empty($email) && !empty($telefone)) {
        $sql_insert = "INSERT INTO usuarios (nome, email, telefone) VALUES ('$nome', '$email', $telefone)";

        if ($conect->query($sql_insert) === TRUE) {
            echo "Dados Inseridos";
        } else {
            echo "Erro: " . $conect->error;
        }
    } else {
        echo "Preencha todos os campos!";
    }
}

//-----------------------------------

//FAZENDO A CONSULTA NO BANCO

/* Consultas selecionadas retornam um conjunto de resultados 
$result = $mysqli->query($conexão, "SELECT Name FROM City LIMIT 10");
OU $retorno = $conect->query($sql);
printf("Select retornou %d linhas.\n", $result->num_rows);
*/

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$sql = "SELECT id, nome, email, telefone FROM usuarios";
$retorno = $conect->query($sql);
//var_dump($retorno); 

if ($retorno->num_rows > 0) {
    while($row = $retorno->fetch_assoc()) {
        echo "\n ID: " . $row["id"] . "\n Nome: " . $row["nome"] . "\n Email: " . $row["email"] . "\n Telefone: " . $row["telefone"] . "\n";
    }
    //die("Pobrema");
} else {
    echo "Nenhum resultado encontrado!";
}

$conect->close();
//------------------------------------------------