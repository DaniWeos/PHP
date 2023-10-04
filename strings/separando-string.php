<?php

$nome = ',Daniel,Cruz.';

echo trim($nome, ' ,.').PHP_EOL; // trim remove caracteres definidos
echo ltrim($nome, '.,').PHP_EOL; // ltrim remove caracteres definidos a esquerda
echo rtrim($nome, '.,').PHP_EOL; // trim remove caracteres definidos a direita