<?php


$comidas[] = 'Arroz';
$comidas[] = 'Feijão';
$comidas["Teste"] = 'Feijoada';
$comidas[] = 'Pizza';
print_r($comidas);

$comidas[2] = 'Pizza Napolitana';
print_r($comidas);

unset($comidas["Teste"]);
print_r($comidas);

?>