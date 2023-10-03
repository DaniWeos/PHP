<?php

$notas = [
    'Ana' => 10,
    'Maria' => 8,
    'Roberto' => 9,
    'Vinicius' => 6,
    'Daniel' => 7,
];

sort ($notas); // ordenar pelos valores em ordem
rsort($notas); // orderar pelos valores em ordem inversa
asort ($notas); // orderar pelos valores em ordem e manter as chaves
ksort($notas); // ordenar pela chave
var_dump($notas);

