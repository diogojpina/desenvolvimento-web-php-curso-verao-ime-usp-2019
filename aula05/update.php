<?php
include('conecta_mysql.php');

$id = 8;
$preco = 90000;
$descricao = 'Oferta imperdível!';

$strsql = "UPDATE produtos SET preco = $preco, descricao = '$descricao' WHERE id = $id;";

if (!$banco->query($strsql)) {
	exit($banco->error);
}

echo "Produto $id alterado com sucesso!" . PHP_EOL;












?>
