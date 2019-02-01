<?php

//http://php.net/manual/pt_BR/ref.math.php

//Valor absoluto
echo abs(4) . PHP_EOL;
// 4
echo abs(-4) . PHP_EOL;
// 4

//Arredonda frações para cima
echo ceil(2.7) . PHP_EOL;
// 3

//Arredonda frações para baixo
echo floor(2.7) . PHP_EOL;
// 2

//Arredonda um número
echo round(2.3) . PHP_EOL;
// 2
echo round(2.7) . PHP_EOL;
// 3


//Obtém o valor de pi
echo pi() . PHP_EOL;

$numeros = array(2, 3, 1, 6, 7);

//Encontra o menor valor
echo min($numeros) . PHP_EOL;
// 1

//Localiza o maior valor
echo max($numeros) . PHP_EOL;
// 7

//Raiz quadrada
echo sqrt(16) . PHP_EOL;
// 4

//Formata um número com os milhares agrupados
