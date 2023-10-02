<?php 

function exibeMensagem (string $mensagem)
{
    echo $mensagem . PHP_EOL;
}

function depositar (array $conta, float $valorADepositar): array
{
    if ($valorADepositar > 0){
        $conta['saldo'] += $valorADepositar;
    } else {
        exibeMensagem("Depósitos precisam ser positivos");
    }
    return $conta;
}

function sacar (array $conta, float $valorASacar): array
{
    if ($valorASacar > $conta['saldo']) {
        exibeMensagem("Saldo em conta indisponível");
    } else {
        $conta['saldo'] -= $valorASacar;
    }
    return $conta;
}