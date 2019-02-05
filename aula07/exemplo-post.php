<?php

class Produto {
	public $id;
	public $nome;
	public $descricao;
	public $preco;
	public $estoque;
	public $imagem;

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

class ProdutoModel {
	private $banco;

	public function __construct($banco) {
		$this->banco = $banco;
	}

	public function insert(Produto $produto) {
		$strsql = "insert into produto (nome, descricao, preco, estoque, imagem)
					values ('$produto->nome', '$produto->descricao', $produto->preco, $produto->estoque, '$produto->imagem')";
		
		if (!$banco->query($strsql)) {
			exit($banco->error);
		}
		$produto->id = $banco->insert_id;
	}
}

/*
if (count($_POST)) {
	$id = $_POST['id'];
	$nome = $_POST['nome'];
	$descricao = $_POST['descricao'];
	$preco = $_POST['preco'];
	$estoque = $_POST['estoque'];
	$imagem = $_POST['imagem'];

	$produto = new Produto($id, $nome, $descricao, $preco, $estoque, $imagem);
}
*/


$host = 'localhost';
$user = 'root';
$pass = 'senha';
$base = 'verao-2019';
$banco = new mysqli($host, $user, $pass, $base);
if (mysqli_connect_errno()) {
	exit("Não foi possível conectar no banco de dados!");
}

$id = '';
$nome = 'Uno';
$descricao = 'Fiat';
$preco = 9999;
$estoque = 5;
$imagem = 'uno.jpg';

$produto = new Produto($id, $nome, $descricao, $preco, $estoque, $imagem);

$produtoModel = new ProdutoModel($banco);
$produtoModel->insert($produto);

?>
