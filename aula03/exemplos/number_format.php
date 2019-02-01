<?php 

$numero = 2.98;

echo number_format($numero, 1) . PHP_EOL;

$numero = 2.98;
echo number_format($numero, 1, ',', '.') . PHP_EOL;


$numero = 1548755462.98;
echo number_format($numero, 1, ',', '.') . PHP_EOL;

echo number_format($numero, 1, '.', ',') . PHP_EOL;


var_dump(number_format($numero, 1, '.', ',')) . PHP_EOL;



?>