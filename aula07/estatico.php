<?php 

class Status {
	public static $ok = 'TUDO CERTO!';
	public static $error = 'FALHOU!';
	public static $warning = 'ALGO DEU ERRADO';
}

class Calculadora {
	public static function soma($num1, $num2) {
		return $num1 + $num2;
	}
}

$calculadora = new Calculadora();
echo $calculadora->soma(2, 5) . PHP_EOL;

echo Calculadora::soma(4, 6) . PHP_EOL;


echo Status::ok . PHP_EOL;