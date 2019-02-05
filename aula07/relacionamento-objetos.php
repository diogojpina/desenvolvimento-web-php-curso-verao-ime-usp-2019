<?php

class Monitor {
	var $nome;

	public function __construct($nome) {
		$this->nome = $nome;
	}

	public function mostrarNaTela($texto) {
		//Código para mostrar na tela
	}
}

class Processador() {
	public function calc($expressao){
		////
		//return $resultado;
	}
}

class Computador {
	var $processador;
	var $monitor;
	var $teclado;
	var $mouse;
	var $caixaSom;

	public function __construct($monitor, $teclado, $mouse, $caixaSom=null) {
		$this->processador = new Processador();
		$this->monitor = $monitor;
		$this->teclado = $mouse;
		$this->mouse = $mouse;
		$this->caixaSom = $caixaSom;
	}	

	public function mostrarNaTela($texto) {
		$this->monitor->mostrarNaTela($texto);
	}

}

$monitor = new Monitor('AOC');

$computador = new Computador($monitor, 'qwert', 'microsoft');

print_r($computador);