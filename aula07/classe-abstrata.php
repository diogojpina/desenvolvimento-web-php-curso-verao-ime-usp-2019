<?php

abstract class FormaGeometrica {
	protected $base;
	protected $altura;

	abstract public function calcArea(); 

	final public function getBase() {
		return $this->base;
	}

	final public function getAltura() {
		return $this->altura;
	}
}

class Quadrado extends FormaGeometrica {

	public function __construct($lado) {
		$this->base = $lado;
		$this->altura = $lado;
	}

	public function calcArea() {
		return $this->base * $this->altura;
	}

}

class Retangulo extends FormaGeometrica {
	public function __construct($base, $altura) {
		$this->base = $base;
		$this->altura = $altura;
	}

	public function calcArea() {
		return $this->base * $this->altura;
	}
}
$quadrado = new Quadrado(5);

$retangulo = new Retangulo(5, 6);

print_r($quadrado);

print_r($retangulo);

echo $quadrado->calcArea() . PHP_EOL;

echo $retangulo->calcArea() . PHP_EOL;

