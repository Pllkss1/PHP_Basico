<?php
/*
Você foi contratado para desenvolver um programa para gerenciar sorteio de nomes, onde o usuário poderá inserir vários nomes em uma lista e solicitar o sorteio de l desses nomes.
O programa deve seguir as restrições abaixo:
- O programa deverá ter um menu para que o usuário escolha se deve adicionar, listar, sortear ou sair
- A opção listar só poderá ser exibida caso a lista contenha ao menos um nome
- A opção sortear só poderá ser exibida caso a lista contenha ao menos dois nomes
- O programa deverá sortear apenas um nome por vez e deve remover os nomes já sorteados da lista
*/

// 1° - array guardar nomes
$nomes = [];

// 3° - loop
do{

// 2° - menu
echo "Menu de Opções: \n";
echo "1 - Adicionar\n";

// 6° - condição, quantidade de nomes
if(count($nomes) >= 1) echo "2 - Listar\n";

// 7° - condição, sortear
if(count($nomes) >= 2) echo "3 - Sortear\n";

echo "4 - Sair\n";

// 4° - input usuario
$opcao = readline("Digite a opção desejada: \n");
echo "\n";

// 5° - escolha opções
switch($opcao){
    case 1:   // adicionar
        $nomes[] = readline("Digite um novo nome: \n\n");
        break;
    case 2:    //listar
        if(count($nomes) >= 1) {
            echo "Nomes na Lista: \n";
            foreach($nomes as $n) {
            echo " - " . $n . "\n";
        }
        echo "\n";
        }
        break;
    case 3:   // sortear
        if(count($nomes) >= 2) {
            $indice = array_rand($nomes);
            echo "Nome Sorteado: " . $nomes[$indice] . "\n";
            echo "\n";
            unset($nomes[$indice]);
        }
        break;
}
}while($opcao != 4);


?>

