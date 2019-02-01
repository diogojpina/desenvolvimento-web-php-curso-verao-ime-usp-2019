<?php

class Funcionario {
	var $salario;

	function calcBonus() {
		return $this->salario * 0.1;
	}
}

class Gerente extends Funcionario {
	var $projetosConcluidos;

	function calcBonus() {
		$bonus = parent::calcBonus();
		$bonus += $this->projetosConcluidos * 50;
		return $bonus;
	}
}


$programador = new Funcionario();
$programador->salario = 5000;
echo $programador->calcBonus() . PHP_EOL;

$gerente = new Gerente();
$gerente->salario = 5000;
$gerente->projetosConcluidos = 5;
echo $gerente->calcBonus() . PHP_EOL;