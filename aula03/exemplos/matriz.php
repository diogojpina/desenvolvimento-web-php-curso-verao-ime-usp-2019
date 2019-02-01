<?php
$carros = array();
$carros['Palio'] = array('cor' => 'Cinza', 'placa' => 'ABC-123'); 
$carros['Corsa'] = array('cor' => 'Branco', 'placa' => 'BBC-773', 'formato' => 'sedã');
$carros['Gol'] = array('cor' => 'Vermelho', 'placa' => 'CCC-999');
$carros['Uno'] = 'Carro indisponível!';
$carros['Fusca'] = 6;







foreach ($carros as $carro => $caracteristicas) {
	echo "# $carro" . PHP_EOL;

	if (is_array($caracteristicas)) {
		foreach ($caracteristicas as $chave => $valor) {
			echo "$chave -> $valor" . PHP_EOL;
		}		
	}
	else if (is_string($caracteristicas)) {
		echo "$caracteristicas" . PHP_EOL;
	}
	else {
		echo "Erro!" . PHP_EOL;
	}
}

?>