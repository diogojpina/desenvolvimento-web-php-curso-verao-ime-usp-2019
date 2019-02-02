<?php 

include('conecta_mysql.php');

$strsql = "select * from produtos";
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
