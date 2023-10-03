<?php

$notas = [
    'Ana' => null,
    'Maria' => 8,
    'Roberto' => 9,
    'Vinicius' => 6,
    'Daniel' => 10,
];

ksort($notas); // ordenar pela chave
var_dump($notas);

if (is_array($notas)){ // verifico se é um array
    echo 'Sim, é um array' . PHP_EOL;
}

var_dump(array_is_list($notas)); // verifico se o array é um list

echo 'Vinicius fez a prova?' . PHP_EOL;
var_dump(array_key_exists('Vinicius', $notas)); //verifico se esta chave existe neste array

echo 'Ana fez a prova?' . PHP_EOL;
var_dump(isset($notas['Ana'])); // verifico se existe esta chave e se ela não é nula

echo 'Alguem tirou 10?' . PHP_EOL;
var_dump(in_array(10, $notas)); // verifica se existe este valor no array | pode ser um '10' string convertido pelo php

echo 'Alguem tirou 10?' . PHP_EOL;
var_dump(in_array(10, $notas, true)); // verifica se existe este valor no array | o 'true'deixa claro que só quero o 10 inteiro, não uma string convertida

echo 'Quem tirou 10?' . PHP_EOL;
var_dump(array_search(10, $notas)); // procuro exatamente este valor no array 

// operador identico '===' , leva em consideração o tipo e o valor