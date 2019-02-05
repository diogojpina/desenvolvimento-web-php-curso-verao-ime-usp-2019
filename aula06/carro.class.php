<?php

class Detran {
	public function consultarMultas($placa) {
		//fazer consulta
		$multas = array(444 => 199.99, 445 => 98.35);
		return $multas;
	}
}

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


//new Carro(1, 'Palio');

class Carro extends Produto {
	private $placa = '';
	private $detran;

	public function setPlaca($placa) {
		$this->placa = $placa;
	}

	public function consultarMultas() {
		if ($this->placa != '') {
			echo "Consultar as multas para a placa " . $this->placa . PHP_EOL;
			$this->detran = new Detran();
			return $this->detran->consultarMultas($this->placa);
		}
	}


}

$corsa = new Carro(1, 'Corsa', 'Chevrolet ano 2000', 12000, 1, 'corsa.jpg');
$corsa->setPlaca('ABC-123');

$multas = $corsa->consultarMultas();

print_r($multas);

print_r($corsa);


?>