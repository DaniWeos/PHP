<?php

$dados = [
    'nome' => 'Vinicius',
    'nota' => 10,
    'idade' => 24,
];

//['nome' => $nome, 'nota' => $nota, 'idade' => $idade] = $dados; // igual oa list();

extract($dados); // Cria variaveis com o nome das chaves do array
var_dump($nome, $nota, $idade);
echo '------------'. PHP_EOL;

var_dump(compact('nome', 'nota', 'idade')); //  crio um array baseado nos valores das variaveis informadas