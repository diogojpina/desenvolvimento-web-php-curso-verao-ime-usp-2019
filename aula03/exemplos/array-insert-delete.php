<?php 
$cores = array('vermelho', 'amarelo', 'cinza');

print_r($cores);

array_push($cores, 'verde');

print_r($cores);

array_push($cores, 'rosa', 'roxa');

print_r($cores);

array_pop($cores);

print_r($cores);

array_unshift($cores, 'branco', 'preto');
print_r($cores);

array_shift($cores);
print_r($cores);

?>