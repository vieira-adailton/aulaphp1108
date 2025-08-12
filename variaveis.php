<?php

$nome = "Adailton"; //Criação de variáveis em PHP - inicia com $
$idade = 11; // Cria variável numerica
$idadestr = "20"; //Cria uma variável string
echo "Boa noite, ".$nome; // Concatena frase + variavel
echo "<br> Idade: ".$idade;
echo "<br> Idade: ".$idadestr;

if($idade > 18){
    echo "<br>Maior";
} else {
    echo "<br>Menor";
}

/*
$idade = 10; executa um loop infinito, a pagina fica aguardando uma solicitação do servidor, e o servidor executando a operação, até chegar um tempo limite.
while($idade < 18) {
    echo "Você não tem idade para dirigir: <br>";
    echo "Idade atual: ".$idade;
}
*/

/*
$idade = 10; executa um loop infinito, a pagina fica aguardando uma solicitação do servidor, e o servidor executando a operação, até chegar um tempo limite. 
while($idade < 18) {
    echo "Você não tem idade para dirigir: <br>";
    echo "Idade atual: ".$idade;
    $idade = $idade +1; condição de parada para o loop infinito
}
*/

/*
$idade = 18;
do {
    echo "Você não tem idade para dirigir: <br>";
    echo "Idade atual: ".$idade;
    $idade = $idade +1;
} while($idade < 18);

for($i = 0; $i < 10; $i++){
    echo "<br>O valor atual é: <br>".$i;
} */

/*
$idade = 12;
switch($idade) {
    case "16":
        echo "Você pode votar";
        break;
    
    case "17":
        echo "Você pode votar";
        echo "<br>:ocê não pode dirigir";
        break;

    case "18":
        echo "Você pode dirigir";
        break;
    
    default:
    if($idade > 18){
    echo "Você já alcançou a maioridade";
    } else {
        echo "Você pode estudar...";
    }

    break;
}
    */

    $lista []= 1;
    $lista ["nome"]= "patati patata"; //nomeando indices
    $lista ["email"]= "circo@patatipatata.com.br"; 
    $lista []= "2";
    $lista [4]= 3;
    $lista []= 4;
    
    $alunos ["2B"][]= "Adailton"; //Vetor dentro de um vetor
    $alunos ["2B"][]= "Alex"; //Vetor dentro de um vetor
    unset($alunos["2B"][1]); //Serve para remover um item de dentro do vetor, no caso, retira o valor na casa 1 - Alex
    echo "<pre>";
    
    echo "<br>Aluno: ".$alunos["2B"][0];
    var_dump($lista) ; //é uma função nativa do PHP que exibe informações detalhadas sobre uma variável, incluindo seu tipo e valor
