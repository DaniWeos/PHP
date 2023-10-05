<?php

$texto = 'Texto com qualquer coisa poxa e caramba';

echo str_replace( // troca as string do primeiro parametro pelo segundo
    ['poxa', 'caramba'],
    ['p', 'c'],
    $texto
) . PHP_EOL;

echo strtr($texto, 'poxa', '***@'). PHP_EOL; //troco todos os caracteres da string 'poxa' e troco pelos da string '***@' em ordem
echo strtr($texto, ['poxa' => 'p', 'caramba' => 'c']). PHP_EOL; // troco a chave do array pelo seu valor