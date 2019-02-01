<?php 

class Conta {
	var $agencia;
	var $codigo;
	var $titular;
	var $saldo;

	function __construct($agencia, $codigo, $titular, $saldo) {
		$this->agencia = $agencia;
		$this->codigo = $codigo;
		$this->titular = $titular;
		$this->saldo = $saldo;
	}

	function getSaldo() {
		return $this->saldo;
	}

	function depositar($valor) {
		if ($valor < 0) {
			$this->saldo += $valor;
		}
	}

	function sacar($valor) {
		if ($valor > 0) {
			if (($this->saldo - $valor) >= 0) {
				$this->saldo -= $valor;
			}
		}
	}
}

class ContaCorrent extends Conta {
	var $limite = 0;

	function setLimite($limite) {
		if ($limite >= 0) {
			$this->limite = $limite;
		}
	}

	function sacar($valor) {
		if ($valor > 0) {
			if (($this->saldo + $this->limite - $valor) >= 0) {
				$this->saldo -= $valor;
			}
		}
	}
}

class ContaPoupanca extends Conta {

	function addJuros($taxaJuros) {
		$this->saldo = $this->saldo + ($this->saldo * ($taxaJuros /  100));
	}

	function sacar($valor) {
		if ($valor > 0) {
			if (($this->saldo - $valor) >= 0) {
				parent::sacar($valor);
			}
			else {
				echo "Saldo indisponível em conta" . PHP_EOL;
				return false;
			}
		}
		else {
			return false;
		}
	}
}

$conta = new Conta(789, "1597-8", "Diogo Pina", 100);

$contaCorrente = new ContaCorrent(789, "1597-8", "Diogo Pina", 100);

$contaCorrente->sacar(150);
echo $contaCorrente->getSaldo() . PHP_EOL;

$contaCorrente->setLimite(200);
$contaCorrente->sacar(150);
echo $contaCorrente->getSaldo() . PHP_EOL;

echo PHP_EOL;

$contaPoupanca = new ContaPoupanca(789, "1597-8", "Diogo Pina", 100);
$contaPoupanca->addJuros(10);
echo $contaPoupanca->getSaldo() . PHP_EOL;
echo $contaPoupanca->sacar(150);
echo $contaPoupanca->getSaldo() . PHP_EOL;