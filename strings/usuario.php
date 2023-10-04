<?php

$email = '  daníel@alura.com.br';
$senha = 'ççç';
$nome = 'Daniel Dias';

echo mb_strlen($senha).PHP_EOL; //retorna o tamanho da string em caracteres

if(mb_strlen($senha) < 8){
    echo 'Senha insegura'.PHP_EOL;
}

$posicaoDoArroba = strpos($email, '@'); // pego a posição do '@'

$usuario = substr($email, 0, $posicaoDoArroba);

echo mb_strtoupper($usuario) . PHP_EOL; // converte todos os caracteres para maiusculo 
echo mb_strtolower($usuario) . PHP_EOL; // converte todos os caracteres para minusculo

echo substr($email, $posicaoDoArroba+1) . PHP_EOL;// começo a contar depois da variavel +1, no caso depois do '@'

list ($nome, $sobrenome) = explode(' ', $nome); // explode separa uma string definindo um separador, aqui criamos um list separando a variavel nome baseado no espaço ' '

echo 'Nome: ' . $nome . PHP_EOL;
echo 'Sobrenome: ' . $sobrenome . PHP_EOL;

$csv = 'Daniel Dias,24,daniel@alura.com.br';
var_dump(explode(',',$csv)); // aqui separamos a variavel csv baseado na virgula ','
