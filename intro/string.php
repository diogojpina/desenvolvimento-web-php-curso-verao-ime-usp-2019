<?php

$nome = " Marcos ";

//Retira o espaço em branco do lado esquerdo
ltrim($nome);
//"Marcos "

//Retira o espaço em branco do lado direito
rtrim($nome);
//" Marcos"

//Retira o espaço em branco do lado esquerdo e direito
trim($nome);
//"Marcos"



$nome = "BrUno";

//Converte uma string para minúscula
strtolower($nome);
//bruno

//Converte uma string para maiúscula
strtoupper($nome);
//BRUNO

$frase = "eu quero café";

//converte para maiúscula o primeiro caractere de uma string
ucfirst($frase);
//Eu quero café

//Converte para maiúsculas o primeiro caractere de cada palavra
ucwords($frase);
//Eu Quero Café



//Converte uma string para um array
$nome = "Maria";
str_split($nome);
//Array([0] => M [1] => a [2] => r [3] => i [4] => a )

//Divide uma string em um vetor de strings
$frase = "Olá Mundo!";
explode(' ', $nome);
//Array([0] => Olá [1] => Mundo!)

$pais = "brasil";

//Retorna uma parte de uma string

substr($pais, 0, 3);
//bra

substr($pais, -3);
//sil

substr($pais, -3, 1);
//s

//Encontra a primeira ocorrencia de uma string
$email  = 'name@example.com';
$domain = strstr($email, '@');
// @example.com

$user = strstr($email, '@', true); 
$user; // name

//Encontra a posição da primeira ocorrência de uma string

$frase = 'Encontre a posição';
$pos = strpos($frase, 'e');
// 6

if (strpos($frase, 'E') !== false) {
	echo "Tem E!";
}

//Preenche uma string para um certo tamanho com outra string
str_pad("Oi", 5, "!");
//Oi!!!

//Repete uma string
str_repeat("Oi! ", 5);
// Oi! Oi! Oi! Oi! Oi! 

//Substitui todas as ocorrências da string de procura com a string de substituição
$frase = "Olá mundo!";
str_replace($frase, 'mundo', 'Diogo');
// Olá Diogo!
