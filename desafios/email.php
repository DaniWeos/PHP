<?php

function geraEmail (String $nome):void
{
$conteudoEmail = <<<FIM
Olá, $nome!

Estamos entrando em contato porque sim

{assinatura}

FIM;

echo $conteudoEmail;
}

geraEmail('Daniel');

//Heredoc = equivalente a aspas duplas "" | Nowdoc = equivalente a aspas simples ''