<?php

class Conta {
	private $saldo = 0;

	public function __construct($valor) {
		$this->depositar($valor);
	}

	public function depositar($valor) {
		$this->saldo = $this->saldo + $valor;
	}

	public function sacar($valor) {
		if (($this->saldo - $valor) < 0) return false;
		$this->saldo = $this->saldo - $valor;
	}

	public function consultarSaldo() {
		return $this->saldo;
	}


}


$conta = new Conta(200);
echo $conta->consultarSaldo() . PHP_EOL;

$conta->sacar(150);
echo $conta->consultarSaldo() . PHP_EOL;

$conta->sacar(100);
echo $conta->consultarSaldo() . PHP_EOL;

echo PHP_EOL;

$conta2 = new Conta(500);
echo "Saldo conta: ". $conta->consultarSaldo() . PHP_EOL;
echo "Saldo conta 2: " .$conta2->consultarSaldo() . PHP_EOL;

$conta2->sacar(180);
echo "Saldo conta: ". $conta->consultarSaldo() . PHP_EOL;
echo "Saldo conta 2: " . $conta2->consultarSaldo() . PHP_EOL;


?>