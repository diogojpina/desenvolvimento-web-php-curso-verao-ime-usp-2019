<?php
include('conecta_mysql.php');

$id = 8;

$strsql = "DELETE FROM produtos WHERE id = $id";
echo $strsql . PHP_EOL;

if (!$banco->query($strsql)) {
	exit($banco->error);
}


echo "Produto $id removido com sucesso!";
















?>
