<?php 

include('conecta_mysql.php');


$categoria_id = 2;
$strsql = "SELECT p.id, p.nome, c.nome as categoria FROM produtos as p
	   INNER JOIN categorias as c on c.id = p.categoria_id
	   WHERE c.id = $categoria_id";

/*
$categoria = 'Motos';
$strsql = "SELECT p.id, p.nome, c.nome as categoria FROM produtos as p
	   INNER JOIN categorias as c on c.id = p.categoria_id
	   WHERE c.nome = '$categoria'";
*/

$statement = $banco->prepare($strsql);
if (!$statement) {
	exit($banco->error);
}

if (!$statement->execute()) {
	exit($banco->error);
}

$resultados = $statement->get_result();

while ($linha = $resultados->fetch_object()) {
	print_r($linha);
}






?>
