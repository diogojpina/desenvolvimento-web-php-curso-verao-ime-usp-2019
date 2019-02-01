<?php

class Classe1 {
	var $prop1;
	var $prop2;

	function metodo1($a, $b) {
		return $a + $b;
	}
}

$obj1 = new Classe1();
$obj1->prop1 = 1;
$obj1->prop2 = "Teste";
//echo $obj1->metodo1(1, 2);
//print_r($obj1);


class Conta {
	private $saldo = 0;

	public function __construct($deposito) {
		$this->depositar($deposito);
	}

	public function depositar($valor) {
		$this->saldo = $this->saldo + $valor;
	}

	public function retirar($valor) {
		if (($this->saldo - $valor) < 0) return false;
		$this->saldo = $this->saldo - $valor;
	}

	public function getSaldo() {
		return $this->saldo;
	}
}

$conta = new Conta(100);
echo $conta->getSaldo() . PHP_EOL;

$conta->depositar(50);
echo $conta->getSaldo() . PHP_EOL;

$conta->retirar(30);
echo $conta->getSaldo() . PHP_EOL;

$conta->retirar(200);
echo $conta->getSaldo() . PHP_EOL;