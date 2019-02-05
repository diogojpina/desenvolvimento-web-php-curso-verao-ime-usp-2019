<?php

class Conta {
	protected $saldo = 0;

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


class ContaCorrente extends Conta {
	private $limite = 0;
	
	public function __construct($valor, $limite) {
		$this->limite = $limite;

		parent::depositar($valor);
	}

	public function sacar($valor) {
		if (($this->saldo + $this->limite - $valor) < 0) return false;
		$this->saldo = $this->saldo - $valor;
	}
	
}

$contaCorrente = new ContaCorrente(200, 100);
echo $contaCorrente->consultarSaldo() . PHP_EOL;

$contaCorrente->sacar(300);
echo $contaCorrente->consultarSaldo() . PHP_EOL;

$contaCorrente->sacar(100);
echo $contaCorrente->consultarSaldo() . PHP_EOL;


print_r($contaCorrente);

?>