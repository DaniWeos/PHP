<?php

$notas = [
    [
        'aluno' => 'Maria',
        'nota' => 10,
    ],
    [
        'aluno' => 'Vinicius',
        'nota' => 6,
    ],
    [
        'aluno' => 'Ana',
        'nota' => 9,
    ]
];

$notasOrdenadas = $notas;

sort($notasOrdenadas); //ordena pelo critério do php

echo ("Desordenadas: ");
var_dump($notas); //var dump mostra tudo da variavel, tempo de desenvolvimento

echo ("Ordenadas: ");
var_dump($notasOrdenadas);


function ordenaNotas (array $nota1, array $nota2): int
{
    return $nota1['nota'] <=> $nota2['nota']; // o operador espaçonave '<=>' compara se é maior, menor ou igual retornando 1 , -1 e 0 nessa ordem.
}

echo ("USORT: ");
usort($notas,'ordenaNotas');
var_dump($notas);