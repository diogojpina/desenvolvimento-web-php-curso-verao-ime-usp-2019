<?php
$carros = array('VW' => 'Gol', 'Fiat' => 'Palio', 'GM' => 'Corsa');
$carrosCopia = &$carros;

asort($carros);

print_r($carros);
print_r($carrosCopia);

exit(0);

$carros = array('VW' => 'Gol', 'Fiat' => 'Palio', 'GM' => 'Corsa');

$carrosCopia = array();
foreach ($carros as $chave => $valor) {
	$carrosCopia[$chave] = $valor;
}

print_r($carros);
print_r($carrosCopia);

echo PHP_EOL;
asort($carros);
print_r($carros);

print_r($carrosCopia);

?>