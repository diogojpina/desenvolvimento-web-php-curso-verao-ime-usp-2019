<?php
$cores = array('vermelho', 33 => 'amarelo', 'cinza', 44 => 'azul', 'verde');

print_r($cores);

sort($cores);
print_r($cores);

rsort($cores);
print_r($cores);


$cores = array('vermelho', 33 => 'amarelo', 'cinza', 44 => 'azul', 'verde');
asort($cores);
print_r($cores);

arsort($cores);
print_r($cores);

$carros = array('GM' => 'Corsa', 'VW' => 'Gol', 'Fiat' => 'Palio');
print_r($carros);
ksort($carros);
print_r($carros);

krsort($carros);
print_r($carros);

echo implode(', ', $carros) . PHP_EOL;

?>