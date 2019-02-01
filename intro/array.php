<?php

$cores = array('vermelho', 'amarelo', 'cinza');
print_r($cores) . PHP_EOL;

$nomes = array(42 => "Maria", 77 => "João", 15 => "Pedro");
print_r($nomes) . PHP_EOL;

$nomes[] = "Marcos";
print_r($nomes) . PHP_EOL;
$nomes[34] = "Vinicius";
print_r($nomes) . PHP_EOL;

$cores = array('FF0000' => 'vermelho', '0000FF' => 'azul', '00FF00' => 'verde');

foreach ($cores as $codigo => $cor) {
	echo "$codigo -> $cor" . PHP_EOL;
}

foreach ($cores as $cor) {
	echo "$cor" . PHP_EOL;
}

echo $cores["FF0000"] . PHP_EOL;

//$comidas = array();
$comidas[] = 'Arroz';
$comidas[] = 'Feijão';
$comidas[] = 'Pizza';
print_r($comidas) . PHP_EOL;

$comidas[2] = 'Pizza Napolitana';
print_r($comidas) . PHP_EOL;

$carros = array();
$carros['Palio'] = array('cor' => 'Cinza', 'placa' => 'ABC-123'); 
$carros['Corsa'] = array('cor' => 'Branco', 'placa' => 'BBC-773', 'formato' => 'sedã');
$carros['Gol'] = array('cor' => 'Vermelho', 'placa' => 'CCC-999');

foreach ($carros as $carro => $caracteristicas) {
	echo "# $carro" . PHP_EOL;
	foreach ($caracteristicas as $chave => $valor) {
		echo "$chave -> $valor" . PHP_EOL;
	}
}

$cores = array('vermelho', 'amarelo', 'cinza');

//Adiciona um ou mais elementos no final de um array
array_push($cores, 'branco');
print_r($cores);

//Extrai um elemento do final do array
$cor = array_pop($cores);
echo $cor . PHP_EOL;
print_r($cores);

//Adiciona um ou mais elementos no início de um array
array_unshift($cores, 'branco');
print_r($cores);

//Retira o primeiro elemento de um array
$cor = array_shift($cores);
echo $cor . PHP_EOL;
print_r($cores);

//Expande um array para um certo comprimento utilizando um determinado valor
$cores = array('vermelho', 'amarelo', 'cinza');
$cores = array_pad($cores, 6, 'branco');
print_r($cores);
//array('vermelho', 'amarelo', 'cinza', 'branco', 'branco', 'branco')


//Retorna um array com os elementos na ordem inversa
$cores = array('vermelho', 'amarelo', 'cinza');
print_r(array_reverse($cores));
//array('cinza', 'amarelo', 'vermelho')


// Combina um ou mais arrays
$a = array('verde', 'vermelho');
$b = array('azul', 'amarelo');
$b2 = array('branco', 'preto');
$c = array_merge($a, $b2, $b);
print_r($c);
// array('verde', 'vermelho', 'branco', 'preto', 'azul', 'amarelo')

//Retorna todas as chaves ou uma parte das chaves de um array
$cores = array('FF0000' => 'vermelho', '0000FF' => 'azul', '00FF00' => 'verde');
print_r(array_keys($cores));
// array('FF0000', '0000FF', '00FF00')

//Retorna todos os valores de um array
print_r(array_values($cores));
// array(0 => 'vermelho', 1 => 'azul', 2 => 'verde')

//Extrai uma parcela de um array
$cores = array('vermelho', 'amarelo', 'cinza', 'azul', 'verde');
print_r(array_slice($cores, 2, 2));
// array('cinza', 'azul')


//Conta o número de elementos de uma variável, ou propriedades de um objeto
echo count($cores) . PHP_EOL;
// 5

//Checa se um valor existe em um array
$cores = array('FF0000' => 'vermelho', '0000FF' => 'azul', '00FF00' => 'verde', 0 => 'branco');
if (in_array('azul', $cores)) {
	echo "Tem azul!" . PHP_EOL;
}

//Procura por um valor em um array e retorna sua chave correspondente caso seja encontrado
$chave = array_search('branco', $cores);	
//00FF00
if ($chave !== false) {
	echo $chave . PHP_EOL;
}

//Checa se uma chave ou índice existe em um array
if (array_key_exists('FF0000', $cores)) {
	echo "Tem vermelho" . PHP_EOL;
}

$cores = array('vermelho', 'amarelo', 'cinza', 'azul', 'verde');

//Ordena um array
sort($cores);
print_r($cores);

//Ordena um array em ordem descrescente
rsort($cores);
print_r($cores);



//Ordena um array pelas chaves
$carros = array('Fiat' => 'Palio', 'GM' => 'Corsa', 'VW' => 'Gol');
ksort($carros);
print_r($carros);

//Ordena um array pelas chaves em ordem descrescente
$carros = array('Fiat' => 'Palio', 'GM' => 'Corsa', 'VW' => 'Gol');
krsort($carros);
print_r($carros);

//Ordena um array mantendo a associação entre índices e valores
$carros = array('Fiat' => 'Palio', 'GM' => 'Corsa', 'VW' => 'Gol');
sort($carros);
print_r($carros);

$carros = array('Fiat' => 'Palio', 'GM' => 'Corsa', 'VW' => 'Gol');
asort($carros);
print_r($carros);

//Junta elementos de um array em uma string
$carros = array('Fiat' => 'Palio', 'GM' => 'Corsa', 'VW' => 'Gol');
echo implode(', ', $carros) . PHP_EOL;
