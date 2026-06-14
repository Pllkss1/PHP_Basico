<?php
/*
Você foi contratado para desenvolver um conversor de unidades, onde o usuário poderá inserir valores em milímetros, centímetros, metros ou quilômetros e a aplicação deverá trazer a informação do valor correspondente nas demais unidades.
O programa deve seguir as restrições abaixo:
- O programa deve solicitar ao usuário que informe qual a unidade base do valor a ser inserido
- O programa não deve permitir o avanço das etapas caso o usuário digite uma unidade inválida
- O programa deve solicitar ao usuário o valor da unidade base
- O programa não deve permitir o avanço das etapas caso o usuário digite um valor não numérico
- O programa deverá imprimir os valores correspondentes em todas as unidades disponíveis no
sistema, exceto aquela que o usuário inseriu
*/

// 1° - array com as unidades
$unidades = [
    'mm' => 1,   //usando mm como unidade principal, multiplicar para transformar em milímetros, e dividir para transformar nas outras unidades
    'cm' => 10,
    'm' => 1000,
    'km' => 1000000
];

// 3° - valida e mostra as unidades ao usuário
$unidadesValidas = implode(', ', array_keys($unidades));

// 4° - laço de repetição do while - executar e depois verificar se a execução é aceita 
do{
    // 2° - input usuário
    $unidadeBase = readline('Digite a unidade('.$unidadesValidas.'):');  //precisamos validar se o usuário digitou a unidade correta, e ele precisa conhecer as unidades possíveis

    // 5° - mensagem de erro
    if(!isset($unidades[$unidadeBase])){
        echo "Inválido\n\n";
    }
}while(!isset($unidades[$unidadeBase]));

// 6° - Solicita o valor
do{
    // 7° - input usuário
    $valorBase = readline('Digite o valor: ');  

    // 8° - mensagem de erro
    if(!is_numeric($valorBase)){
        echo "Valor inválido\n\n";
    }
}while(!is_numeric($valorBase));

// 9° - ultima etapa, mostrar o valor inserido em todas as outrs unidades
//precisamos converter todas as unidades para milímetro
$valorMilimetro = $valorBase * $unidades[$unidadeBase];

// 10° - imprimindo os resultados
echo "\nResultados: \n";
foreach($unidades as $unidade => $divisor) {
    // 11° - condição, para não mostrar a unidade que foi inserida
    if($unidade == $unidadeBase) continue;

    //imprime
    echo " > " . ($valorMilimetro / $divisor) . " " . $unidade . "\n"; 
}





//para o segundo requisito precisamos de uma estrutura condicional(verificar valor correto) e um laço de repetição(verificar se ele pode passar)



?>