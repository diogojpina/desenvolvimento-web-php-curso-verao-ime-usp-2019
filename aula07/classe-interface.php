<?php

interface FormaGeometrica {
	public function calcArea(); 

	public function calcPerimetro();
}

class Quadrado implements FormaGeometrica {
	public $lado;

	public function calcArea() {
		return $this->lado * $this->lado;
	}

	public function calcPerimetro() {
		return 4 * $this->lado;
	}

	public function diagonal() {
		#code
	}
}

$quadrado = new Quadrado();
$quadrado->lado = 7;

echo $quadrado->calcArea() . PHP_EOL;
echo $quadrado->calcPerimetro() . PHP_EOL;
