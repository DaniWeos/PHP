<?php

$notasBimestre1 = [
    'Ana' => 10,
    'Maria' => 9,
    'Roberto' => 7,
    'Vinicius' => 6,
    'Joao' => 8,
];

$notasBimestre2 = [
    'Roberto' => 7,
    'Ana' => 9,
    'Joao' => 8,
];

//var_dump(array_diff($notasBimestre1, $notasBimestre2)); // retorna os valores que existam no primeiro array e nao existam no segundo em diante, considerando os valores

//var_dump(array_diff_key($notasBimestre1, $notasBimestre2)); // retorna os valores que existam no primeiro array e nao existam no segundo em diante, considerando os valores e a chave

//var_dump(array_diff_assoc($notasBimestre1, $notasBimestre2)); // retorna os elementos que estao no primeiro array mas nao no segundos , considerando chave e valor

$alunosFaltantes = array_diff_key($notasBimestre1, $notasBimestre2);
$nomesAlunos = array_keys($alunosFaltantes);
$notasAlunos = array_values($alunosFaltantes);

//var_dump($nomesAlunos = array_keys($alunosFaltantes)); // funcao que pega as chaves

//var_dump(array_values($alunosFaltantes)); // funcao que pega os valores do array

//var_dump(array_combine($notasAlunos, $nomesAlunos)); // combino as chaves de um array com os valores de outro de mesmo tamanho

var_dump(array_flip($alunosFaltantes)); // inverto a chave com o valor
