<?php

$telefones = ['(24) 99999 - 9999', '(21) 99999 - 9999', '(24) 2222 - 2222'];

foreach ($telefones as $telefone) {
    $regex = '/^\(([0-9]{2})\) (9?[0-9]{4} - [0-9]{4})$/'; //expressão regular para mapear um número telefonico
    $telefoneValido = preg_match( //verificar se a expressao deu algum match
        $regex,
        $telefone,
        $correspondencia
    );

    if ($telefoneValido) {
        echo 'Telefone válido'. PHP_EOL;
    } else {
        echo 'Telefone inválido'. PHP_EOL;
    }

    echo preg_replace( //substituir grupos de uma exReg
        $regex,
        '(XX) \2',
        $telefone
    ) . PHP_EOL;
}
