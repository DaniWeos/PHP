<?php 

function exibeMensagem (string $mensagem)
{
    echo $mensagem . '<br>';
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

function letrasMaisculas (array &$conta)
{
    $conta['titular'] = strtoupper($conta['titular']);
}

function exibeConta (array $conta)
{
   ['titular' => $titular, 'saldo' => $saldo] = $conta;
   echo "<li>Titular: $titular. Saldo: $saldo</li>";
}