<?php

$a = 5;

if ($a == 5) {
	echo "Verdadeiro";
}
else {
	echo "Falso";
}

echo "\n";


$i = 1;
while ($i <= 5) {
	echo $i;

	$i++;
}
//12345
echo "\n";

for ($i=1; $i <= 5; $i++) {
	echo $i;
}
//12345
echo "\n";

$vetor = array("Pera", "Maçã", "Uva");
for ($i=0; $i < count($vetor); $i++) {
	echo $vetor[$i];
}
//PeraMaçãUva
echo "\n";

foreach ($vetor as $chave => $valor) {
	echo "$chave->$valor ";
}
//0->Pera 1->Maçã 2->Uva
echo "\n";

$nome = "Maria";
switch ($nome) {
	case 'João':
		# code...
		break;
	case 'Maria':
		# code...
		break;
	default:
		# code...
		break;
}