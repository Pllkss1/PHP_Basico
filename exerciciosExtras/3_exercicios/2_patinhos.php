<?php
/*
Sua missão é desenvolver um programa para tornar a música dos 5 patinhos mais dinâmica a ponto de podermos definir a quantidade total de patinhos e o programa imprimir sua letra completa em sequência.

O programa deve seguir as restrições abaixo:
- O programa deve solicitar ao usuário que insira a quantidade total de
patinhos
- O número de patinhos deve ser maior do que 1 e menor do que 10
- O programa deve iterar a quantidade total de patinhos fazendo as atualizações necessárias nos textos
- As estrofes devem ser separadas por duas quebras de linha
Para te ajudar segue abaixo partes da letra da música:

5 patinhos foram passear
Além das montanhas
Para brincar
A mamãe gritou: Quá, quá, quá, quá
Mas só 4 patinhos voltaram de lá.
[...] 

2 patinhos foram passear
Além das montanhas
Para brincar
A mamãe gritou: Quá, quá, quá, quá
Mas só l patinho voltou de lá.

1 patinho foi passear
Além das montanhas
Para brincar
A mamãe gritou: Quá, quá, quá, quá
Mas nenhum patinho voltou de lá.

A mamãe patinha foi procurar
Além das montanhas
Na beira do mar A mamaę gritou: Quá, quá, quá, quá
E os 5 patinhos voltaram de lá.

*/

// 1° - input usuário
$patos = readline("Digite a quantidade de Patos: \n");

// 2° - valida a quantidade minima e maxima
 if(!is_numeric($patos) || $patos < 1 || $patos >= 10) {
    echo "Quantidade Inválida. Deve ser entre 1 e 10 patos. \n";
    exit;
 }

 // 3° - laço de repetição para as estrofes da musica
for($p = $patos; $p > 0; $p--){
    echo "\n";
    // 4° - condição da quantidade de patos usando o ternário
    echo $p != 1 ? $p . " patinhos foram passear \n" : "1 patinho foi passear \n";

    //textos fixos
    echo "Além das montanhas \n";
    echo "Para brincar \n";
    echo "A mamãe gritou: Quá, quá, quá, quá \n";

    // 5° - condição quantidade restante de patos
    switch($p){
        case 2:
            echo "Mas só 1 patinho voltou de lá. \n";
            break;
        case 1:
            echo "Mas nenhum patinho voltou de lá. \n";
            break;
        default:
            echo "Mas só " . ($p - 1) . " patinhos voltaram de lá. \n";
    }
    echo "\n";
}

// 6° - final
echo "\n";
echo "A mamãe patinha foi procurar\n";
echo "Além das montanhas\n";
echo "Na beira do mar \n";
echo "A mamaę gritou: Quá, quá, quá, quá\n";
echo "E os " . $patos . " patinhos voltaram de lá.\n";


?>