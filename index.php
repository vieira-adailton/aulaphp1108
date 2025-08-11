<?php

$nome = "Adailton"; //Criação de variáveis em PHP - inicia com $
$idade = 12; // Cria variável numerica
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

$idade = 18;
do {
    echo "Você não tem idade para dirigir: <br>";
    echo "Idade atual: ".$idade;
    $idade = $idade +1;
} while($idade < 18);