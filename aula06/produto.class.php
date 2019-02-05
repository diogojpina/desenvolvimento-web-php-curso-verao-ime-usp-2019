<?php

class Produto {
	private $id;
	private $nome;
	private $descricao;
	private $preco;
	private $estoque;
	private $imagem;

	public function __construct($id, $nome, $descricao, $preco, $estoque, $imagem) {
		$this->id = $id;
		$this->nome = $nome;
		$this->descricao = $descricao;
		$this->preco = $preco;
		$this->estoque = $estoque;
		$this->imagem = $imagem;
	}


	public function atualizaPreco($preco) {
		$this->preco = $preco;
	}
}

$corsa = new Produto(1, 'Corsa', 'Chevrolet ano 2000', 12000, 1, 'corsa.jpg');

$rr = new Produto(3, 'RR', 'BMW', 80000, 1, 'rr-bmw.jpg');

$corsa->atualizaPreco(10000);
$rr->atualizaPreco(79000);

print_r($corsa);
print_r($rr);



?>