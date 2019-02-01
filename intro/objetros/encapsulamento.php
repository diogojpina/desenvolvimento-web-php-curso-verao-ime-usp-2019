<?php


class Funcionario {
	private $codigo;
	public $nome;
	protected $salario;

	public function __construct($codigo, $nome, $salario) {
		$this->codigo = $codigo;
		$this->nome = $nome;
		$this->salario = $salario;
	}

	public function setSalario($salario) {
		
	}
}