<?php
//A biblioteca de uma universidade deseja fazer um algoritmo que leia o nome do livro que será emprestado, o tipo de usuário (professor ou aluno) e possa imprimir um recibo conforme mostrado a seguir. Considerar que o professor tem 10 dias para devolver o livro o aluno somente 3 dias

$livro = $_POST['livro'];
$usuario = $_POST['usuario'];

echo $usuario . ", Você emprestou o livro " . $livro . "</br>";


if ($usuario === 'Professor') {
    $devolucao = 10;
} else {
    $devolucao = 3;
}

$emprestimo = date('d/m/y');
$datadevolu = date('d/m/y', strtotime(" + $devolucao days"));

// Imprime o recibo formatado na tela
    echo '<h2>Recibo de Empréstimo</h2>';
    echo "Livro: " . $livro . '</br>';
    echo "Usuário: " . $usuario . '</br>';
    echo "Prazo de Devolução: " . $devolucao . ' dias</br>';
    echo "Data do Empréstimo: " . $emprestimo . '</br>';
    echo "Limite para a Devolução: " . $devolucao . " dias! Dia: " . $datadevolu . '</br>';


