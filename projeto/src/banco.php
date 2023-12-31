<?php

require_once 'D:\Prog\PHP\projeto\src\Conta.php';
require_once 'D:\Prog\PHP\projeto\src\Endereco.php';
require_once 'D:\Prog\PHP\projeto\src\Titular.php';
require_once 'D:\Prog\PHP\projeto\src\CPF.php';


$endereco = new Endereco('Cidade', 'Bairro', 'Rua', '100');
$vinicius = new Titular(new CPF('123.456.789-10'), 'Vinicius Dias', $endereco);
$primeiraConta = new Conta($vinicius);
$primeiraConta->deposita(500);
$primeiraConta->saca(300); // 

echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$patricia = new Titular(new CPF('698.549.548-10'), 'Patricia', $endereco);
$segundaConta = new Conta($patricia);
var_dump($segundaConta);


$outroEndereco = new Endereco ('AB', 'BB' ,'CC', 'DD');
$outra = new Conta(new Titular(new CPF('123.654.789-01'), 'Abcdefg', $outroEndereco));
unset($segundaConta);
echo Conta::recuperaNumeroDeContas();
