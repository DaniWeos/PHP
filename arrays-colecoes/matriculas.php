<?php

$alunos2021 = [
    'Ana',
    'Maria',
    'Roberto',
    'Vinicius',
    'Joao',
];

$novosAlunos = [
    'Patricia',
    'Nico',
    'Kilderson',
    'Daiane',
];

//$alunos2022 = array_merge($alunos2021, $novosAlunos); // uno um ou mais arrays e reorganizo as chaves | pode usar o operador '+' mas ele sobrescreve chaves iguais a dele

$alunos2022 = [...$alunos2021, 'Carlos Vinicius', ...$novosAlunos]; // crio um novo array desempacontando outros arrays dentro dele | operador 'unpacking'

array_push($alunos2022, 'Alice', 'Bob', 'Charlie'); // adiciono um ou vários elementos ao array
$alunos2022[] = 'Luiz'; // adiciono apenas um ao array

array_unshift($alunos2022, 'Sthepane', 'Rafaela'); //adiciono valores ao começo do array

array_shift($alunos2022); //remove o primeiro elemento do array | array numericos sao reordenados

array_pop($alunos2022); //remove o ultimo elemento do array

var_dump($alunos2022);