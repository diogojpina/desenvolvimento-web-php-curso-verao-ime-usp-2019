<?php

class Conta {
	public $saldo = 0;
	private $limite = 100;
	protected $cpf = 123;

	public function mudarLimite($limite) {
		$this->limite = $limite;
	}
}

class ContaCorrente extends Conta {
	public function mostrarCPF() {
		echo $this->cpf . PHP_EOL;
	}

	public function mudarLimite($limite) {
		parent::mudarLimite($limite);
	}
}




$conta = new Conta();

$conta->saldo = 100;
echo $conta->saldo . PHP_EOL;

echo $conta->mudarLimite(200) . PHP_EOL;
//echo $conta->limite . PHP_EOL;

//echo $conta->cpf . PHP_EOL;

$contaCorrente = new ContaCorrente();
$contaCorrente->mostrarCPF();

//echo $contaCorrente->cpf . PHP_EOL;

$contaCorrente->mudarLimite(400);

print_r($contaCorrente);
?>