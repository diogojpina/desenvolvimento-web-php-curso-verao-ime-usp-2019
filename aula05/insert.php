<?php
include('conecta_mysql.php');

$categoria_id = 2;
$nome = 'RR';
$descricao = 'BMW';
$preco = '99999.98';
$estoque = 1;
$imagem = 'rr_bmw.jpg';

$strsql = "INSERT INTO produtos (categoria_id, nome, descricao, preco, estoque, imagem) values ($categoria_id, '$nome', '$descricao', $preco, $estoque, '$imagem');";

//echo $strsql . PHP_EOL;

if (!$banco->query($strsql)) {
	exit($banco->error);
}

$id = $banco->insert_id;

echo "Produto $id criado com sucesso!" . PHP_EOL;















?>
